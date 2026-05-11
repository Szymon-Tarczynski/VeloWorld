// ======================================================
// basket-viewer.js (ESM)
// Wymaga importmap w <head> (topbar.php):
//  "three" -> three.module.js
//  "three/addons/" -> examples/jsm/
// ======================================================

import * as THREE from "three";
import { OrbitControls } from "three/addons/controls/OrbitControls.js";
import { GLTFLoader } from "three/addons/loaders/GLTFLoader.js";

const container = document.getElementById("basket-3d");
if (!container) {
  console.error("[basket-viewer] Brak #basket-3d – nic nie renderuję.");
} else {
  // --- SCENE ---
  const scene = new THREE.Scene();
  scene.background = new THREE.Color(0xffffff);

  // --- CAMERA ---
  const camera = new THREE.PerspectiveCamera(
    45,
    container.clientWidth / container.clientHeight,
    0.01,
    2000
  );

  // --- RENDERER (bez alpha => tło Three.js jest białe) ---
  const renderer = new THREE.WebGLRenderer({ antialias: true });
  renderer.setSize(container.clientWidth, container.clientHeight);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
  renderer.outputColorSpace = THREE.SRGBColorSpace;
  renderer.toneMappingExposure = 1.0;
  container.appendChild(renderer.domElement);

  // --- CONTROLS (zoom działa w obie strony) ---
  const controls = new OrbitControls(camera, renderer.domElement);
  controls.enableDamping = true;
  controls.dampingFactor = 0.08;
  controls.enableZoom = true;
  controls.enablePan = true;

  // Ustawiamy tymczasowo, a po wczytaniu modelu ustawimy dynamicznie
  controls.minDistance = 0.2;
  controls.maxDistance = 120;

  // --- LIGHTING (jasne, neutralne studio) ---
  scene.add(new THREE.AmbientLight(0xffffff, 0.9));

  const key = new THREE.DirectionalLight(0xffffff, 1.2);
  key.position.set(8, 10, 8);
  scene.add(key);

  const fill = new THREE.DirectionalLight(0xffffff, 0.8);
  fill.position.set(-8, 6, 8);
  scene.add(fill);

  const rim = new THREE.DirectionalLight(0xffffff, 0.6);
  rim.position.set(-6, 6, -8);
  scene.add(rim);

  // --- LOAD MODEL ---
  const MODEL_URL = "models/neorack-x1.glb";

  const loader = new GLTFLoader();
  loader.load(
    MODEL_URL,
    (gltf) => {
      const model = gltf.scene;
      scene.add(model);

      // Auto-fit: wylicz rozmiar
      const box = new THREE.Box3().setFromObject(model);
      const size = box.getSize(new THREE.Vector3());
      const center = box.getCenter(new THREE.Vector3());

      controls.target.copy(center);

      const maxDim = Math.max(size.x, size.y, size.z);

      // Ustaw kamerę stabilnie "przed" modelem
      camera.position.set(
        center.x,
        center.y + maxDim * 0.6,
        center.z + maxDim * 3.2
      );

      // Dynamiczne limity zoomu (żeby nie przykleiło do ścianki)
      controls.minDistance = maxDim * 0.4;
      controls.maxDistance = maxDim * 15;

      // Clipping fix
      camera.near = maxDim / 200;
      camera.far = maxDim * 200;
      camera.updateProjectionMatrix();
      controls.update();
    },
    undefined,
    (err) => {
      console.error("[basket-viewer] Błąd GLB:", err);
    }
  );

  // --- LOOP ---
  function animate() {
    requestAnimationFrame(animate);
    controls.update();
    renderer.render(scene, camera);
  }
  animate();

  // --- RESIZE ---
  window.addEventListener("resize", () => {
    const w = container.clientWidth;
    const h = container.clientHeight;
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    renderer.setSize(w, h);
  });
}