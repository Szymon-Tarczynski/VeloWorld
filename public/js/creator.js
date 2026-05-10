/* ══════════════════════════════════════
   DANE CZĘŚCI
   ══════════════════════════════════════ */
const PARTS = [
    {
        id: 'frame', label: 'Rama', icon: '🏗️',
        categoryName: 'Ramy rowerowe',
        categoryTagline: 'Podstawa każdego roweru – wybierz typ dopasowany do terenu',
        categoryFields: [
            { icon: '🏔️', key: 'Typy ram', val: 'MTB Hardtail, Szosowa, Gravel, Enduro Full-Sus' },
            { icon: '⚙️', key: 'Standard osi tylnej', val: 'QR 135mm (stary) • Thru 142mm • Boost 148mm' },
            { icon: '🔩', key: 'Standard suportu (BB)', val: 'BSA gwintowany • Press-Fit BB86/92 • PF30' },
            { icon: '📐', key: 'Geometria', val: 'XC (agresywna) • Trail (wszechstronna) • Enduro (slack)' },
        ],
        categoryTags: ['MTB', 'Szosa', 'Gravel', 'Full-Sus', 'Hardtail'],
        categoryCompat: 'Rama definiuje standard osi, suportu i hamulców. Wszystkie pozostałe części muszą być z nią zgodne.',
        options: [
            {
                id: 'frame_mtb', name: 'MTB Hardtail', sub: 'Aluminium 6061 / Boost 100mm', price: 1200, tags: ['mtb', 'boost100', 'std_bb'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Boost 110mm (15×110mm)' },
                    { icon: '📏', key: 'Oś tylna', val: 'Boost 148mm (12×148mm)' },
                    { icon: '🔩', key: 'Suport', val: 'BSA 68/73mm gwintowany' },
                    { icon: '🛑', key: 'Hamulce', val: 'Tylko tarczowe (Flat / Post Mount)' },
                    { icon: '⚙️', key: 'Stery', val: 'Tapered lub z adapterem' },
                ],
                compatNote: 'Nowoczesny standard Boost – wymaga widelca 15×110mm i kół Boost.',
                typeTags: ['Boost', 'BSA', 'Hardtail', 'Tapered']
            },
            {
                id: 'frame_road', name: 'Szosowa Karbon', sub: 'Karbonowa / Thru-Axle 12mm', price: 2800, tags: ['road', 'thru12', 'press_bb'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Thru 100mm (12×100mm)' },
                    { icon: '📏', key: 'Oś tylna', val: 'Thru 142mm (12×142mm)' },
                    { icon: '🔩', key: 'Suport', val: 'Press-Fit BB86/BB92' },
                    { icon: '🛑', key: 'Hamulce', val: 'Flat Mount tarczowe (szosowe)' },
                    { icon: '🎯', key: 'Koła', val: 'Tylko 700c' },
                ],
                compatNote: 'Press-Fit BB: większość korbowodów BSA wymaga adaptera PF→BSA.',
                typeTags: ['Szosa', 'Thru-Axle', 'Press-Fit', '700c']
            },
            {
                id: 'frame_gravel', name: 'Gravel Chromoly', sub: 'Stal chromoly / Thru-Axle 12mm', price: 1600, tags: ['gravel', 'thru12', 'std_bb'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Thru 100mm' },
                    { icon: '📏', key: 'Oś tylna', val: 'Thru 142mm' },
                    { icon: '🔩', key: 'Suport', val: 'BSA 68/73mm gwintowany' },
                    { icon: '🛑', key: 'Hamulce', val: 'Flat Mount tarczowe' },
                    { icon: '🎯', key: 'Koła', val: '700c lub 650b (sprawdź prześwit)' },
                ],
                compatNote: 'BSA + Thru-Axle: prosty montaż napędu, nowoczesna oś. Wszechstronność gravel.',
                typeTags: ['Gravel', 'Thru-Axle', 'BSA', '700c / 650b']
            },
            {
                id: 'frame_enduro', name: 'Enduro Full-Sus', sub: 'Aluminium 7005 / Boost 148mm', price: 3200, tags: ['enduro', 'boost148', 'std_bb'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Boost 110mm' },
                    { icon: '📏', key: 'Oś tylna', val: 'Boost 148mm' },
                    { icon: '🔩', key: 'Suport', val: 'BSA 68/73mm gwintowany' },
                    { icon: '🛑', key: 'Hamulce', val: 'Tarczowe Post/Flat Mount' },
                    { icon: '💡', key: 'Zalecane', val: 'Dropper Post + amortyzator 150mm+' },
                ],
                compatNote: 'Tylny amortyzator wbudowany. Widelec min. 150mm skoku. Dropper obowiązkowy.',
                typeTags: ['Enduro', 'Full-Sus', 'Boost', 'BSA']
            },
        ]
    },

    {
        id: 'fork', label: 'Widelec', icon: '🍴',
        categoryName: 'Widelce',
        categoryTagline: 'Łączy ramę z kołem przednim – decyduje o osi i sterach',
        categoryFields: [
            { icon: '🔧', key: 'Typy', val: 'Sztywny (rigid) • Amortyzowany (suspension fork)' },
            { icon: '📏', key: 'Standardy osi', val: 'QR 9mm • Thru 15mm • Boost 15×110mm' },
            { icon: '⚙️', key: 'Rura sterowa', val: 'Prosta 1-1/8" • Tapered 1-1/8"→1,5"' },
            { icon: '📐', key: 'Skok amortyzatora', val: '80mm XC • 100mm Trail • 120–160mm Enduro' },
        ],
        categoryTags: ['Rigid', 'Amortyzowany', 'Boost', 'Tapered', 'QR'],
        categoryCompat: 'Oś widelca musi pasować do ramy (Boost/Thru/QR). Rura sterowa musi pasować do sterów.',
        options: [
            {
                id: 'fork_rigid', name: 'Widelec Sztywny', sub: 'Stal / 1-1/8" / QR 9mm', price: 180, tags: ['rigid', 'qr9', '1_1_8'],
                fields: [
                    { icon: '📏', key: 'Oś', val: 'QR 9×100mm (szybkozamykacz)' },
                    { icon: '⚙️', key: 'Rura sterowa', val: 'Prosta 1-1/8"' },
                    { icon: '⚠️', key: 'Uwaga', val: 'NIE pasuje do ram Boost ani Thru-Axle' },
                    { icon: '🎯', key: 'Koła', val: '26" / 27,5" / 700c z piastą QR' },
                ],
                compatNote: 'Tylko do starszych ram z QR. Lekki, tani, zero konserwacji.',
                typeTags: ['Rigid', 'QR', '1-1/8"']
            },
            {
                id: 'fork_sus100', name: 'Amortyzator 100mm', sub: 'RockShox Judy / Boost 110mm / Tapered', price: 900, tags: ['sus100', 'boost110', 'tapered'],
                fields: [
                    { icon: '📏', key: 'Oś', val: '15×110mm Boost' },
                    { icon: '⚙️', key: 'Rura sterowa', val: 'Tapered 1-1/8"→1,5"' },
                    { icon: '📐', key: 'Skok', val: '100mm' },
                    { icon: '🎯', key: 'Koła', val: '29" lub 27,5" Boost' },
                ],
                compatNote: 'Rama musi mieć Boost 110mm z przodu i tapered główkę (lub adapter).',
                typeTags: ['Suspension', 'Boost', 'Tapered', '100mm']
            },
            {
                id: 'fork_sus120', name: 'Amortyzator 120mm', sub: 'Fox 32 / Boost 110mm / Tapered', price: 1600, tags: ['sus120', 'boost110', 'tapered'],
                fields: [
                    { icon: '📏', key: 'Oś', val: '15×110mm Boost' },
                    { icon: '⚙️', key: 'Rura sterowa', val: 'Tapered 1-1/8"→1,5"' },
                    { icon: '📐', key: 'Skok', val: '120mm' },
                    { icon: '🎯', key: 'Koła', val: '29" / 27,5" / Mullet Boost' },
                ],
                compatNote: 'Fox 32 – wyższy poziom niż Judy. Lepsze tłumienie, dłuższa trwałość.',
                typeTags: ['Suspension', 'Boost', 'Tapered', '120mm']
            },
            {
                id: 'fork_road', name: 'Widelec Karbonowy', sub: 'Szosa / Tapered / Thru 12mm', price: 650, tags: ['road_fork', 'thru12', 'tapered'],
                fields: [
                    { icon: '📏', key: 'Oś', val: 'Thru 12×100mm' },
                    { icon: '⚙️', key: 'Rura sterowa', val: 'Tapered 1-1/8"→1,5"' },
                    { icon: '🎯', key: 'Koła', val: 'Tylko 700c' },
                    { icon: '📐', key: 'Prześwit', val: 'Opony do 32–40mm' },
                ],
                compatNote: 'Do szosówek i gravel. Tapered – sprawdź czy Twoja rama ma tapered główkę.',
                typeTags: ['Rigid', 'Szosa', 'Thru-Axle', 'Tapered', '700c']
            },
        ]
    },

    {
        id: 'headset', label: 'Stery', icon: '⚙️',
        categoryName: 'Stery (Headset)',
        categoryTagline: 'Łożysko główki ramy – łączy widelec z ramą i pozwala skręcać',
        categoryFields: [
            { icon: '📐', key: 'Standardy', val: 'Threadless Ahead • ZS (Zero Stack) • EC (External Cup) • Integrated' },
            { icon: '⚙️', key: 'Typy rur sterowych', val: 'Prosta 1-1/8" • Tapered 1-1/8"→1,5"' },
            { icon: '🔩', key: 'Montaż', val: 'Press-fit do ramy lub nakręcany' },
        ],
        categoryTags: ['1-1/8"', 'Tapered', 'ZS44', 'EC44', 'Press-Fit'],
        categoryCompat: 'Muszą pasować do: (1) rozmiaru rury sterowej widelca, (2) standardu główki ramy.',
        options: [
            {
                id: 'hs_std', name: 'Stery Standard', sub: '1-1/8" / Ahead / ZS lub EC', price: 80, tags: ['hs_1_1_8'],
                fields: [
                    { icon: '⚙️', key: 'Rura sterowa', val: 'Prosta 1-1/8"' },
                    { icon: '⚠️', key: 'Uwaga', val: 'NIE pasuje do widelców Tapered' },
                    { icon: '🔩', key: 'Montaż', val: 'ZS44 lub EC44 – sprawdź wymiary główki ramy' },
                ],
                compatNote: 'Do starszych i prostszych ram z 1-1/8" główką. Nie używaj z amortyzatorami Tapered.',
                typeTags: ['Standard', '1-1/8"', 'Ahead']
            },
            {
                id: 'hs_tapered', name: 'Stery Tapered', sub: '1-1/8"→1,5" / Press-fit', price: 140, tags: ['hs_tapered'],
                fields: [
                    { icon: '⚙️', key: 'Rura sterowa', val: 'Tapered 1-1/8"→1,5"' },
                    { icon: '✅', key: 'Pasuje do', val: 'Amortyzatorów MTB Boost i widelców karbonowych' },
                    { icon: '🔩', key: 'Standard', val: 'ZS44 (górne) / EC49 lub IS52 (dolne) – zależy od ramy' },
                ],
                compatNote: 'Obowiązkowe przy amortyzatorach XC/Trail/Enduro. Sprawdź standard gniazda ramy.',
                typeTags: ['Tapered', '1-1/8"→1,5"', 'MTB', 'Szosa']
            },
            {
                id: 'hs_integrated', name: 'Stery Integrowane', sub: '1-1/8" ZS44 / EC49', price: 200, tags: ['hs_1_1_8'],
                fields: [
                    { icon: '⚙️', key: 'Rura sterowa', val: 'Prosta 1-1/8"' },
                    { icon: '🎨', key: 'Design', val: 'Łożyska chowane w ramie – brak czasz na zewnątrz' },
                    { icon: '🔩', key: 'Wymaga', val: 'Ramy z gniazdami ZS lub IS' },
                ],
                compatNote: 'Estetyczne i solidne. Popularny standard w szosówkach. Sprawdź gniazda w ramie.',
                typeTags: ['Integrated', '1-1/8"', 'ZS', 'Szosa']
            },
        ]
    },

    {
        id: 'drivetrain', label: 'Napęd', icon: '🦷',
        categoryName: 'Napęd (Drivetrain)',
        categoryTagline: 'Korba, łańcuch, kaseta, przerzutki – serce roweru',
        categoryFields: [
            { icon: '🔢', key: 'Konfiguracje', val: '1×11 • 1×12 • 2×10 • 2×11' },
            { icon: '🔩', key: 'Standard suportu BB', val: 'BSA 68/73mm • Press-Fit • SRAM DUB • Shimano Hollowtech' },
            { icon: '⚙️', key: 'Standard freehuba', val: 'Shimano HG • Micro Spline • SRAM XD' },
        ],
        categoryTags: ['1x', '2x', 'Shimano', 'SRAM', 'HG', 'XD', 'Micro Spline'],
        categoryCompat: 'Napęd determinuje: standard suportu (rama), standard freehuba (koła) i typ dźwigni/shifterów (hamulce).',
        options: [
            {
                id: 'drv_1x11', name: '1×11 MTB Shimano', sub: 'Shimano Deore / kaseta 11-51T', price: 760, tags: ['1x', 'mtb_drv', 'std_bb_need'],
                fields: [
                    { icon: '🔩', key: 'Suport BB', val: 'BSA 68/73mm (standard Shimano)' },
                    { icon: '⚙️', key: 'Freehub', val: 'Shimano HG 11-biegowy' },
                    { icon: '🎯', key: 'Dźwignie', val: 'Prawa trigger + tylna przerzutka (bez lewej dźwigni)' },
                    { icon: '🔗', key: 'Łańcuch', val: 'Shimano 11-biegowy' },
                ],
                compatNote: 'Prosty i niezawodny standard. Brak przerzutki przedniej = mniej awarii.',
                typeTags: ['1×11', 'HG', 'BSA', 'Shimano Deore']
            },
            {
                id: 'drv_2x10', name: '2×10 Szosa Shimano', sub: 'Shimano Tiagra / kaseta 11-34T', price: 680, tags: ['2x', 'road_drv', 'std_bb_need'],
                fields: [
                    { icon: '🔩', key: 'Suport BB', val: 'BSA lub PF (sprawdź ramę)' },
                    { icon: '⚙️', key: 'Freehub', val: 'Shimano HG 10-biegowy' },
                    { icon: '🎯', key: 'Dźwignie', val: 'STI lewa + prawa' },
                    { icon: '⚠️', key: 'Uwaga', val: 'Dźwignie STI ≠ hamulce MTB' },
                ],
                compatNote: 'Klasyczny szosowy zestaw. Dźwignie STI – hamulce muszą być szosowe.',
                typeTags: ['2×10', 'HG', 'STI', 'Szosa', 'Tiagra']
            },
            {
                id: 'drv_1x12', name: '1×12 SRAM Eagle', sub: 'SRAM GX Eagle / kaseta 10-52T', price: 1400, tags: ['1x', 'mtb_drv', 'dub_bb'],
                fields: [
                    { icon: '🔩', key: 'Suport BB', val: 'SRAM DUB' },
                    { icon: '⚙️', key: 'Freehub', val: 'SRAM XD Driver' },
                    { icon: '🎯', key: 'Dźwignie', val: 'SRAM trigger / AXS' },
                    { icon: '🔗', key: 'Łańcuch', val: 'SRAM Eagle 12-biegowy' },
                ],
                compatNote: 'XD Driver wymaga specjalnej piasty – sprawdź koła przed zakupem!',
                typeTags: ['1×12', 'XD', 'SRAM DUB', 'Eagle', 'AXS']
            },
            {
                id: 'drv_1x12r', name: '1×12 Shimano SLX', sub: 'Shimano SLX M7100 / kaseta 10-51T', price: 1100, tags: ['1x', 'mtb_drv', 'std_bb_need'],
                fields: [
                    { icon: '🔩', key: 'Suport BB', val: 'BSA 68/73mm (Shimano)' },
                    { icon: '⚙️', key: 'Freehub', val: 'Micro Spline' },
                    { icon: '🎯', key: 'Dźwignie', val: 'Shimano trigger' },
                    { icon: '⚠️', key: 'Uwaga', val: 'HG ≠ Micro Spline' },
                ],
                compatNote: 'Micro Spline – upewnij się, że koła mają właściwy freehub.',
                typeTags: ['1×12', 'Micro Spline', 'BSA', 'SLX', 'Shimano']
            },
        ]
    },

    {
        id: 'wheels', label: 'Koła', icon: '⭕',
        categoryName: 'Koła (Wheelset)',
        categoryTagline: 'Rozmiar, standard osi i freehub – trzy rzeczy do sprawdzenia',
        categoryFields: [
            { icon: '📐', key: 'Rozmiary', val: '26" • 27,5" • 29" • 700c' },
            { icon: '📏', key: 'Oś przód', val: 'QR 9×100 • Thru 15×100 • Boost 15×110' },
            { icon: '📏', key: 'Oś tył', val: 'QR 9×135 • Thru 12×142 • Boost 12×148' },
            { icon: '⚙️', key: 'Freehub', val: 'HG • Micro Spline • XD' },
        ],
        categoryTags: ['29"', '27,5"', '700c', 'Boost', 'Thru', 'QR', 'HG', 'XD'],
        categoryCompat: 'Oś przód → widelec. Oś tył → rama. Freehub → napęd (kaseta).',
        options: [
            {
                id: 'wh_29_boost', name: 'Koła 29" Boost', sub: 'DT Swiss M1900 / 15×110 + 12×148', price: 1200, tags: ['29er', 'boost_front', 'boost_rear'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Boost 15×110mm' },
                    { icon: '📏', key: 'Oś tylna', val: 'Boost 12×148mm' },
                    { icon: '⚙️', key: 'Freehub', val: 'HG (opcje Micro Spline / XD)' },
                    { icon: '🎯', key: 'Pasuje do', val: 'Hardtail/Enduro Boost' },
                ],
                compatNote: 'Koła muszą mieć freehub odpowiedni do kasety (HG/Micro Spline/XD).',
                typeTags: ['29"', 'Boost 110/148', 'HG']
            },
            {
                id: 'wh_27_qr', name: 'Koła 27,5" QR', sub: 'WTB ST Light / QR 9mm + QR 135mm', price: 680, tags: ['275', 'qr_front', 'qr_rear'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'QR 9×100mm' },
                    { icon: '📏', key: 'Oś tylna', val: 'QR 9×135mm' },
                    { icon: '⚠️', key: 'Uwaga', val: 'NIE pasuje do Boost/Thru' },
                    { icon: '⚙️', key: 'Freehub', val: 'HG' },
                ],
                compatNote: 'Stary standard – sprawdź czy rama i widelec mają QR, nie Thru/Boost.',
                typeTags: ['27,5"', 'QR', 'Legacy', 'HG']
            },
            {
                id: 'wh_700c_thru', name: 'Koła 700c Thru', sub: 'Fulcrum Racing 600 / 12×100 + 12×142', price: 1100, tags: ['700c', 'thru_front', 'thru_rear'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Thru 12×100mm' },
                    { icon: '📏', key: 'Oś tylna', val: 'Thru 12×142mm' },
                    { icon: '⚙️', key: 'Freehub', val: 'HG 11-bieg' },
                    { icon: '🎯', key: 'Pasuje do', val: 'Szosa/Gravel Thru' },
                ],
                compatNote: 'Standard szosowy i gravel. Stabilniejsze niż QR dzięki Thru-Axle.',
                typeTags: ['700c', 'Thru 100/142', 'HG', 'Szosa/Gravel']
            },
            {
                id: 'wh_29_mullet', name: '29"/27,5" Mullet', sub: 'Mix Boost / przód 29" tył 27,5"', price: 1400, tags: ['mullet', 'boost_front', 'boost_rear'],
                fields: [
                    { icon: '📏', key: 'Oś przód', val: 'Boost 15×110mm (29")' },
                    { icon: '📏', key: 'Oś tył', val: 'Boost 12×148mm (27,5")' },
                    { icon: '💡', key: 'Zaleta', val: 'Toczenie + manewrowość' },
                    { icon: '⚠️', key: 'Uwaga', val: 'Rama musi mieć clearance' },
                ],
                compatNote: 'Nie każda rama enduro ma prześwit na mullet – sprawdź specyfikację.',
                typeTags: ['Mullet', '29"/27,5"', 'Boost', 'Enduro']
            },
        ]
    },

    {
        id: 'brakes', label: 'Hamulce', icon: '🛑',
        categoryName: 'Hamulce',
        categoryTagline: 'Tarczowe vs obręczowe – standard mocowania i typ dźwigni',
        categoryFields: [
            { icon: '🔧', key: 'Typy', val: 'V-Brake • mechaniczne tarczowe • hydrauliczne tarczowe' },
            { icon: '🔩', key: 'Mocowanie', val: 'Post Mount • Flat Mount • IS (stary)' },
            { icon: '📐', key: 'Tarcze', val: '140 • 160 • 180–203mm' },
        ],
        categoryTags: ['Hydrauliczne', 'Mechaniczne', 'Flat Mount', 'Post Mount', 'V-Brake'],
        categoryCompat: 'Typ dźwigni musi pasować do shifterów (STI ≠ MTB).',
        options: [
            {
                id: 'br_mech', name: 'Mechaniczne V-Brake', sub: 'Shimano BR-R353 / linki', price: 120, tags: ['v_brake', 'no_disc'],
                fields: [
                    { icon: '⚠️', key: 'Wymaga', val: 'Haczyków V-Brake w ramie i widelcu' },
                    { icon: '🎯', key: 'Koła', val: 'Obręcz hamulcowa (alu)' },
                    { icon: '🎯', key: 'Dźwignie', val: 'Dedykowane do V-Brake' },
                ],
                compatNote: 'Tylko do ram z haczykami V-Brake. MTB tarczowe → wybierz tarczowe.',
                typeTags: ['V-Brake', 'Legacy']
            },
            {
                id: 'br_hyd_mtb', name: 'Hydrauliczne MTB', sub: 'Shimano MT200 / tarcze 180mm', price: 380, tags: ['disc', 'flat_mount'],
                fields: [
                    { icon: '🔩', key: 'Mocowanie', val: 'Flat lub Post Mount (adapter)' },
                    { icon: '📐', key: 'Tarcze', val: '180mm' },
                    { icon: '⚠️', key: 'Uwaga', val: 'NIE do STI szosowych' },
                    { icon: '🎯', key: 'Piasty', val: '6-śrub / Centerlock' },
                ],
                compatNote: 'MTB hamulce wymagają MTB dźwigni. Dobre w błocie i deszczu.',
                typeTags: ['Hydrauliczne', 'MTB', '180mm']
            },
            {
                id: 'br_hyd_road', name: 'Hydrauliczne Szosa', sub: 'Shimano RS505 / tarcze 160mm', price: 680, tags: ['disc', 'flat_mount', 'road_brake'],
                fields: [
                    { icon: '🔩', key: 'Mocowanie', val: 'Flat Mount' },
                    { icon: '📐', key: 'Tarcze', val: '160mm' },
                    { icon: '✅', key: 'Dźwignie', val: 'STI hydrauliczne' },
                ],
                compatNote: 'Jedyne sensowne do STI hydraulicznych. Flat Mount obowiązkowy.',
                typeTags: ['Hydrauliczne', 'Szosa', 'STI']
            },
            {
                id: 'br_mech_disc', name: 'Mech. Tarczowe', sub: 'TRP Spyre / tarcze 160mm', price: 290, tags: ['disc', 'flat_mount'],
                fields: [
                    { icon: '🔩', key: 'Mocowanie', val: 'Flat lub Post (adapter)' },
                    { icon: '🎯', key: 'Dźwignie', val: 'Pasują do STI i MTB' },
                    { icon: '📐', key: 'Tarcze', val: '160mm' },
                    { icon: '💡', key: 'Zaleta', val: 'Prosty serwis (linki)' },
                ],
                compatNote: 'Kompromis: prostota linek + tarcze. Działa z różnymi dźwigniami.',
                typeTags: ['Mechaniczne', '160mm']
            },
        ]
    },

    {
        id: 'saddle', label: 'Siodło', icon: '🪑',
        categoryName: 'Siodło i sztyca',
        categoryTagline: 'Komfort i ergonomia – ważniejsze niż myślisz',
        categoryFields: [
            { icon: '📏', key: 'Średnica sztycy', val: '27,2 • 30,9 • 31,6mm' },
            { icon: '🔧', key: 'Typy', val: 'Stała • Dropper Post' },
            { icon: '📐', key: 'Szerokość siodła', val: 'Dobierz do rozstawu kości kulszowych' },
        ],
        categoryTags: ['Dropper Post', 'Standard', 'Race', 'Trail', 'Ergonomia'],
        categoryCompat: 'Średnica sztycy musi pasować do ramy. Dropper wymaga internal routing.',
        options: [
            {
                id: 'sad_sport', name: 'Siodło Sport', sub: 'Selle Royal Asphalt / 275×143mm', price: 180, tags: ['saddle_standard'],
                fields: [
                    { icon: '📏', key: 'Sztyca', val: '27,2 lub 30,9 (sprawdź ramę)' },
                    { icon: '🎯', key: 'Przeznaczenie', val: 'Rekreacja / trekking' },
                    { icon: '📐', key: 'Pozycja', val: 'Wyprostowana / lekko pochylona' },
                ],
                compatNote: 'Standardowe szyny – pasuje do każdego zacisku. Komfortowa pianka.',
                typeTags: ['Sport', '143mm']
            },
            {
                id: 'sad_trail', name: 'Siodło Trail MTB', sub: 'WTB Trail Boss / 275×142mm', price: 280, tags: ['saddle_standard'],
                fields: [
                    { icon: '📏', key: 'Sztyca', val: '27,2 / 30,9 / 31,6mm' },
                    { icon: '🎯', key: 'Przeznaczenie', val: 'MTB / trail / enduro' },
                    { icon: '🛡️', key: 'Tapicerka', val: 'Wzmocniona' },
                ],
                compatNote: 'Wąski nos do swobodnego ruchu bioder. Pasuje do standard i dropper.',
                typeTags: ['Trail', '142mm']
            },
            {
                id: 'sad_race', name: 'Siodło Race', sub: "fi'zi:k Argo Tempo / 275×142mm", price: 420, tags: ['saddle_standard'],
                fields: [
                    { icon: '📏', key: 'Sztyca', val: 'Szyny Ti/Cr-Mo' },
                    { icon: '🎯', key: 'Przeznaczenie', val: 'Szosa / wyścigi' },
                    { icon: '💡', key: 'Wycięcie', val: 'Redukuje ucisk' },
                ],
                compatNote: 'Do pochylonej pozycji. Przy wyprostowanej może być mniej komfortowe.',
                typeTags: ['Race', '142mm']
            },
            {
                id: 'sad_dropper', name: 'Dropper Post 125mm', sub: 'KS Lev Ci / pilot na kierownicy', price: 680, tags: ['saddle_dropper'],
                fields: [
                    { icon: '📏', key: 'Średnica', val: '27,2 / 30,9 / 31,6mm' },
                    { icon: '🔧', key: 'Routing', val: 'Internal (przez ramę)' },
                    { icon: '🎮', key: 'Pilot', val: 'Na kierownicy' },
                    { icon: '📐', key: 'Skok', val: '125mm' },
                ],
                compatNote: 'Dropper = must-have w MTB. Rama musi mieć internal routing.',
                typeTags: ['Dropper', '125mm']
            },
        ]
    },
];

const RULES = [
    {
        id: 'r1', label: 'Rama ↔ Widelec (oś)', parts: ['frame', 'fork'], showUnder: ['frame', 'fork'],
        check: s => {
            const f = s.frame, fk = s.fork; if (!f || !fk) return null;
            if ((f.tags.includes('boost100') || f.tags.includes('boost148')) && fk.tags.includes('boost110')) return 'ok';
            if (f.tags.includes('road') && fk.tags.includes('road_fork')) return 'ok';
            if (f.tags.includes('gravel') && (fk.tags.includes('road_fork'))) return 'ok';
            return 'err';
        },
        msgOk: 'Oś widelca zgodna z ramą ✓',
        msgErr: 'Niezgodność osi widelca i ramy!',
        fixErr: 'Rama Boost → widelec Boost 15×110mm. Rama Thru → widelec Thru 12mm. Ramy szosowe/gravel → widelec Thru karbonowy.'
    },
    {
        id: 'r2', label: 'Widelec ↔ Stery (rura sterowa)', parts: ['fork', 'headset'], showUnder: ['fork', 'headset'],
        check: s => {
            const fk = s.fork, hs = s.headset; if (!fk || !hs) return null;
            if (fk.tags.includes('tapered') && hs.tags.includes('hs_tapered')) return 'ok';
            if (!fk.tags.includes('tapered') && hs.tags.includes('hs_1_1_8')) return 'ok';
            if (fk.tags.includes('tapered') && hs.tags.includes('hs_1_1_8')) return 'err';
            return 'warn';
        },
        msgOk: 'Stery pasują do widelca ✓',
        msgWarn: 'Może być potrzebny adapter sterów',
        msgErr: 'Stery 1-1/8" nie pasują do rury Tapered!',
        fixErr: 'Amortyzatory MTB i widelce karbonowe mają rurę Tapered → użyj sterów Tapered.',
        fixWarn: 'Sprawdź wymiary gniazd ramy (ZS44/EC49) i dobierz adapter.'
    },
    {
        id: 'r3', label: 'Rama ↔ Napęd (suport BB)', parts: ['frame', 'drivetrain'], showUnder: ['frame', 'drivetrain'],
        check: s => {
            const f = s.frame, d = s.drivetrain; if (!f || !d) return null;
            const press = f.tags.includes('press_bb');
            if (!press && d.tags.includes('std_bb_need')) return 'ok';
            if (press && d.tags.includes('dub_bb')) return 'warn';
            if (!press && d.tags.includes('dub_bb')) return 'warn';
            if (press && d.tags.includes('std_bb_need')) return 'warn';
            return 'ok';
        },
        msgOk: 'Standard suportu kompatybilny ✓',
        msgWarn: 'Potrzebny adapter suportu (BB)',
        fixWarn: 'Rama Press-Fit + napęd BSA → kup adapter PF→BSA lub DUB PF.'
    },
    {
        id: 'r4', label: 'Rama ↔ Koła (oś tylna)', parts: ['frame', 'wheels'], showUnder: ['frame', 'wheels'],
        check: s => {
            const f = s.frame, w = s.wheels; if (!f || !w) return null;
            if ((f.tags.includes('boost100') || f.tags.includes('boost148')) && w.tags.includes('boost_rear')) return 'ok';
            if (f.tags.includes('thru12') && w.tags.includes('thru_rear')) return 'ok';
            if (f.tags.includes('road') && w.tags.includes('700c')) return 'ok';
            if (f.tags.includes('gravel') && (w.tags.includes('700c'))) return 'ok';
            if (w.tags.includes('qr_rear')) return 'err';
            return 'warn';
        },
        msgOk: 'Oś tylna zgodna z ramą ✓',
        msgWarn: 'Sprawdź standard osi tylnej ramy i piasty',
        msgErr: 'Piasta QR 135mm nie pasuje do ramy Boost/Thru!',
        fixErr: 'Wybierz koła z piastą Boost 148mm lub Thru 142mm odpowiadającą ramie.'
    },
    {
        id: 'r5', label: 'Widelec ↔ Koła (rozmiar)', parts: ['fork', 'wheels'], showUnder: ['fork', 'wheels'],
        check: s => {
            const fk = s.fork, w = s.wheels; if (!fk || !w) return null;
            if (fk.tags.includes('road_fork') && w.tags.includes('700c')) return 'ok';
            if ((fk.tags.includes('sus100') || fk.tags.includes('sus120')) && (w.tags.includes('29er') || w.tags.includes('275') || w.tags.includes('mullet'))) return 'ok';
            if (fk.tags.includes('rigid') && (w.tags.includes('275') || w.tags.includes('700c'))) return 'ok';
            return 'warn';
        },
        msgOk: 'Rozmiar koła zgodny z widelcem ✓',
        msgWarn: 'Sprawdź clearance widelca dla tego rozmiaru opony',
        fixWarn: 'Amortyzator MTB: 29" lub 27,5". Widelec szosowy: tylko 700c.'
    },
    {
        id: 'r6', label: 'Rama ↔ Hamulce (mocowanie)', parts: ['frame', 'brakes'], showUnder: ['frame', 'brakes'],
        check: s => {
            const f = s.frame, b = s.brakes; if (!f || !b) return null;
            if (f.tags.includes('road') && b.tags.includes('road_brake')) return 'ok';
            if (b.tags.includes('no_disc') && (f.tags.includes('mtb') || f.tags.includes('enduro'))) return 'err';
            if (b.tags.includes('disc')) return 'ok';
            return 'warn';
        },
        msgOk: 'Hamulce kompatybilne z ramą ✓',
        msgWarn: 'Upewnij się że rama ma mocowanie tarczowe',
        msgErr: 'V-Brake nie pasuje do ramy MTB!',
        fixErr: 'Rama MTB ma mocowanie tarczowe. Wybierz hamulce tarczowe.'
    },
    {
        id: 'r7', label: 'Napęd ↔ Koła (freehub)', parts: ['drivetrain', 'wheels'], showUnder: ['drivetrain', 'wheels'],
        check: s => {
            const d = s.drivetrain, w = s.wheels; if (!d || !w) return null;
            if (d.tags.includes('road_drv') && (w.tags.includes('700c') || w.tags.includes('thru_rear'))) return 'ok';
            if (d.tags.includes('mtb_drv') && (w.tags.includes('29er') || w.tags.includes('275') || w.tags.includes('mullet'))) return 'ok';
            return 'warn';
        },
        msgOk: 'Freehub i napęd kompatybilne ✓',
        msgWarn: 'Sprawdź standard freehuba w kołach!',
        fixWarn: 'SRAM 12 → XD. Shimano 12 → Micro Spline. Shimano do 11 → HG.'
    },
    {
        id: 'r8', label: 'Napęd ↔ Hamulce (dźwignie)', parts: ['drivetrain', 'brakes'], showUnder: ['drivetrain', 'brakes'],
        check: s => {
            const d = s.drivetrain, b = s.brakes; if (!d || !b) return null;
            if (d.tags.includes('road_drv') && b.tags.includes('road_brake')) return 'ok';
            if (d.tags.includes('mtb_drv') && b.tags.includes('flat_mount') && !b.tags.includes('road_brake')) return 'ok';
            if (d.tags.includes('road_drv') && !b.tags.includes('road_brake')) return 'warn';
            return 'ok';
        },
        msgOk: 'Dźwignie i shiftery kompatybilne ✓',
        msgWarn: 'Niezgodność dźwigni! Szosowe STI ≠ hamulce MTB',
        fixWarn: 'STI mają inny skok niż MTB. Użyj hamulców szosowych lub pełnej grupy MTB.'
    },
];

/* ══════════════════════════════════════
   STAN
   ══════════════════════════════════════ */
const selected = {};

/* ══════════════════════════════════════
   LEWY PANEL: OGÓLNE INFO KATEGORII (POD PRZYCISKAMI)
   ══════════════════════════════════════ */
function renderLeftCategoryInfo(p) {
    const fieldsHTML = p.categoryFields.map(f => `
    <div class="cg-row">
      <div class="cg-ic">${f.icon}</div>
      <div class="cg-txt">
        <div class="cg-key">${f.key}</div>
        <div class="cg-val">${f.val}</div>
      </div>
    </div>
  `).join('');

    const tagsHTML = p.categoryTags.map(t => `<span class="cg-tag">${t}</span>`).join('');

    return `
    <div class="card-general">
      <div class="cg-title">${p.categoryName}</div>
      <div class="cg-sub">${p.categoryTagline}</div>

      <div class="cg-section">
        ${fieldsHTML}
      </div>

      <div class="cg-section">
        <div class="cg-row">
          <div class="cg-ic">🔗</div>
          <div class="cg-txt">
            <div class="cg-key">Kompatybilność</div>
            <div class="cg-val">${p.categoryCompat}</div>
          </div>
        </div>
      </div>

      <div class="cg-tags">${tagsHTML}</div>
    </div>
  `;
}

/* ══════════════════════════════════════
   PRAWY PANEL: placeholder, gdy nie wybrano wariantu
   ══════════════════════════════════════ */
function renderDpPlaceholder(p) {
    return `
    <div class="dp-name">${p.label}</div>
    <div class="dp-tagline">Wybierz wariant po lewej, aby zobaczyć parametry wybranej części.</div>
    <div class="dp-divider"></div>
    <div style="color:var(--text-muted);font-size:.78rem;line-height:1.5;">
      • Kliknij jedną z opcji w karcie po lewej<br>
      • Tutaj pokażą się szczegóły techniczne wybranego wariantu
    </div>
  `;
}

function init() {
    makeBgDots();
    renderSteps();
    renderSections();
    updateAll();
}

function makeBgDots() {
    const c = document.getElementById('bgDots');
    if (!c) return;
    for (let i = 0; i < 20; i++) {
        const s = document.createElement('span');
        const sz = Math.random() * 6 + 3;
        s.style.cssText = `width:${sz}px;height:${sz}px;left:${Math.random() * 100}%;background:hsl(${220 + Math.random() * 60},70%,60%);animation-duration:${9 + Math.random() * 14}s;animation-delay:${-Math.random() * 12}s;`;
        c.appendChild(s);
    }
}

function renderSteps() {
    const row = document.getElementById('stepsRow');
    if (!row) return;
    row.innerHTML = '';
    PARTS.forEach((p, i) => {
        const div = document.createElement('div');
        div.className = 'cfg-step';
        div.innerHTML = `<div class="step-dot" id="step_${p.id}"><span class="step-num">${i + 1}</span><div class="step-label">${p.label}</div></div>${i < PARTS.length - 1 ? `<div class="step-line" id="stepline_${i}"></div>` : ''}`;
        row.appendChild(div);
    });
}


function getPriceRange(options) {
    if (!options || options.length === 0) return null;

    let min = Infinity;
    let max = -Infinity;

    options.forEach(o => {
        if (typeof o.price === 'number') {
            min = Math.min(min, o.price);
            max = Math.max(max, o.price);
        }
    });

    if (!isFinite(min) || !isFinite(max)) return null;
    if (min === max) return `${min.toLocaleString('pl')} zł`;

    return `${min.toLocaleString('pl')} – ${max.toLocaleString('pl')} zł`;
}

/* ══════════════════════════════════════
   RENDER SEKCJI: lewy = przyciski + OGÓLNE INFO, prawy = parametry wybranej opcji
   ══════════════════════════════════════ */
function renderSections() {
    const container = document.getElementById('sectionsContainer');
    if (!container) return;
    container.innerHTML = '';

    PARTS.forEach((p, pi) => {
        const wrap = document.createElement('div');
        wrap.id = 'wrap_' + p.id;

        const grid = document.createElement('div');
        grid.className = 'section-wrap';
        grid.style.animationDelay = `${pi * 0.06}s`;

        // LEWA: karta
        const card = document.createElement('div');
        card.className = 'cfg-card';
        card.id = 'card_' + p.id;

        const optHTML = p.options.map(o => `
      <button class="opt-btn" id="opt_${o.id}" onclick="selectOption('${p.id}','${o.id}')">
        <div class="opt-price">${o.price} zł</div>
        <div class="opt-name">${o.name}</div>
        <div class="opt-sub">${o.sub}</div>
      </button>
    `).join('');



        const priceRange = getPriceRange(p.options);

        card.innerHTML = `
  <div class="cfg-card-title">
    <span class="cat-icon">${p.icon}</span>
    <span class="cat-name">${p.label}</span>
    ${priceRange ? `<span class="cat-price-range">(${priceRange})</span>` : ''}
  </div>

  <div class="options-grid" id="grid_${p.id}">
    ${optHTML}
  </div>

  <div id="gen_${p.id}">
    ${renderLeftCategoryInfo(p)}
  </div>
`;



        // PRAWA: panel
        const dp = document.createElement('div');
        dp.className = 'discord-panel';
        dp.id = 'dp_' + p.id;

        dp.innerHTML = `
      <div class="dp-banner" id="dpbanner_${p.id}">
        <div class="dp-banner-icon" id="dpicon_${p.id}">${p.icon}</div>
      </div>
      <div class="dp-body" id="dpbody_${p.id}">
        ${renderDpPlaceholder(p)}
      </div>
    `;

        grid.appendChild(card);
        grid.appendChild(dp);

        const inlineDiv = document.createElement('div');
        inlineDiv.className = 'inline-compat';
        inlineDiv.id = 'inline_' + p.id;
        inlineDiv.style.display = 'none';

        wrap.appendChild(grid);
        wrap.appendChild(inlineDiv);
        container.appendChild(wrap);
    });
}

/* Render panelu konkretnej opcji (prawy panel) */
function renderDpOption(p, opt) {
    const fieldsHTML = opt.fields.map(f => `
    <div class="dp-field-row">
      <div class="dp-field-icon">${f.icon}</div>
      <div class="dp-field-content">
        <span class="dp-field-key">${f.key}</span>
        <span class="dp-field-val">${f.val}</span>
      </div>
    </div>`).join('');
    const tagsHTML = (opt.typeTags || []).map(t => `<span class="dp-tag">${t}</span>`).join('');
    return `
    <div class="dp-selected-badge visible" id="dpbadge_${p.id}">✓ Wybrano: ${opt.name}</div>
    <div class="dp-name">${opt.name}</div>
    <div class="dp-tagline">${opt.sub} &nbsp;·&nbsp; <span style="color:var(--accent);font-weight:700">${opt.price} zł</span></div>
    <div class="dp-divider"></div>
    <div class="dp-section">
      <div class="dp-section-label">Szczegóły techniczne</div>
      ${fieldsHTML}
    </div>
    <div class="dp-section">
      <div class="dp-section-label">Ważne przy łączeniu</div>
      <div class="dp-field-row">
        <div class="dp-field-icon">💡</div>
        <div class="dp-field-content">
          <span class="dp-field-key">Uwaga</span>
          <span class="dp-field-val">${opt.compatNote || ''}</span>
        </div>
      </div>
    </div>
    <div class="dp-section">
      <div class="dp-section-label">Tagi</div>
      <div class="dp-tags">${tagsHTML}</div>
    </div>
  `;
}

/* ══════════════════════════════════════
   SELEKCJA
   ══════════════════════════════════════ */
function selectOption(partId, optId) {
    const part = PARTS.find(p => p.id === partId);
    if (!part) return;

    const opt = part.options.find(o => o.id === optId);
    if (!opt) return;

    const isSame = selected[partId] && selected[partId].id === optId;

    // ✅ Toggle OFF: klik na już zaznaczoną opcję
    if (isSame) {
        delete selected[partId];

        // zdejmij zaznaczenie z przycisku
        const btn = document.getElementById('opt_' + optId);
        if (btn) btn.classList.remove('selected');

        // prawy panel wraca do placeholdera
        const dpBody = document.getElementById('dpbody_' + partId);
        if (dpBody) dpBody.innerHTML = renderDpPlaceholder(part);

        // reset bannera (opcjonalnie)
        const banner = document.getElementById('dpbanner_' + partId);
        if (banner) banner.style.background = '';

        // schowaj final card (jak u Ciebie)
        const finalCard = document.getElementById('finalCard');
        if (finalCard) finalCard.style.display = 'none';

        updateAll();
        return;
    }

    // ✅ Toggle ON: wybór nowej opcji

    // zdejmij zaznaczenie z pozostałych opcji w tej kategorii
    part.options.forEach(o => {
        const b = document.getElementById('opt_' + o.id);
        if (b) b.classList.remove('selected');
    });

    // ustaw nowy stan
    selected[partId] = opt;

    // zaznacz kliknięty przycisk
    const picked = document.getElementById('opt_' + optId);
    if (picked) picked.classList.add('selected');

    // schowaj final
    const finalCard = document.getElementById('finalCard');
    if (finalCard) finalCard.style.display = 'none';

    // prawy panel: szczegóły wybranej opcji
    const dpBody = document.getElementById('dpbody_' + partId);
    if (dpBody) {
        dpBody.innerHTML = renderDpOption(part, opt);
        dpBody.classList.remove('refreshing');
        void dpBody.offsetWidth; // reflow
        dpBody.classList.add('refreshing');
    }

    // banner kolor
    const banner = document.getElementById('dpbanner_' + partId);
    if (banner) {
        banner.style.background = 'linear-gradient(135deg,rgba(79,92,255,.5) 0%,rgba(30,40,120,.55) 100%)';
    }

    updateAll();
}

/* ══════════════════════════════════════
   UPDATE
   ══════════════════════════════════════ */
function updateAll() {
    updateSteps();
    updateProgress();
    updateCompatPanel();
    updateSummaryBar();
    updateCheckButton();
    updateCartButton();
    updateGlobalCompat();
}

function runRule(rule) {
    const res = rule.check(selected);
    if (res === null) return null;
    let msg;
    if (res === 'ok') msg = rule.msgOk;
    else if (res === 'warn') msg = rule.msgWarn || '';
    else msg = rule.msgErr || '';
    const fix = res === 'err' ? (rule.fixErr || null) : res === 'warn' ? (rule.fixWarn || null) : null;
    return { severity: res, msg, fix, label: rule.label };
}

function updateGlobalCompat() {
    const box = document.getElementById('globalCompat');
    if (!box) return;

    const active = RULES
        .filter(r => r.parts.every(pid => selected[pid]))
        .map(r => runRule(r))
        .filter(Boolean);

    if (active.length === 0) {
        box.style.display = 'none';
        return;
    }

    const hasErr = active.some(r => r.severity === 'err');
    const hasWarn = active.some(r => r.severity === 'warn');

    let cls, title, msgs;

    if (hasErr) {
        cls = 'err';
        title = '❌ Niezgodności w konfiguracji';
        msgs = active.filter(r => r.severity === 'err').map(r => `• ${r.label}: ${r.msg}`);
    } else if (hasWarn) {
        cls = 'warn';
        title = '⚠️ Wymagana weryfikacja';
        msgs = active.filter(r => r.severity === 'warn').map(r => `• ${r.label}: ${r.msg}`);
    } else {
        cls = 'ok';
        title = '✅ Konfiguracja poprawna';
        msgs = ['Wszystkie wybrane części są ze sobą kompatybilne.'];
    }

    box.className = 'global-compat ' + cls;
    box.innerHTML = `
    <div class="global-compat-title">${title}</div>
    <div class="global-compat-msg">${msgs.join('<br>')}</div>
  `;
    box.style.display = 'block';
}

function updateSteps() {
    PARTS.forEach((p, i) => {
        const dot = document.getElementById('step_' + p.id);
        const line = document.getElementById('stepline_' + i);
        if (!dot) return;

        dot.classList.remove('active', 'done', 'has-err', 'has-warn');
        if (line) line.classList.remove('done');

        if (selected[p.id]) {
            const rel = RULES.filter(r => r.showUnder.includes(p.id) && r.parts.every(pid => selected[pid]));
            const res = rel.map(r => runRule(r)).filter(Boolean).filter(r => r.severity !== 'ok');
            if (res.some(r => r.severity === 'err')) dot.classList.add('has-err');
            else if (res.some(r => r.severity === 'warn')) dot.classList.add('has-warn');
            else dot.classList.add('done');
            if (line) line.classList.add('done');
        } else {
            const any = PARTS.slice(0, i).every(pp => selected[pp.id]);
            dot.classList.toggle('active', any && !selected[p.id]);
        }
    });
}

function updateProgress() {
    const bar = document.getElementById('progressBar');
    if (!bar) return;
    bar.style.width = (Object.keys(selected).length / PARTS.length * 100) + '%';
}

function updateCompatPanel() {
    const list = document.getElementById('compatList');
    if (!list) return;

    const active = RULES.filter(r => r.parts.every(pid => selected[pid]));
    if (active.length === 0) {
        list.innerHTML = '<div style="color:var(--text-muted);font-size:.8rem;">Wybierz części, aby zobaczyć sprawdzenie kompatybilności.</div>';
        return;
    }

    list.innerHTML = '';
    active.forEach((rule, i) => {
        const res = runRule(rule);
        if (!res) return;
        const icon = res.severity === 'ok' ? '✅' : res.severity === 'warn' ? '⚠️' : '❌';
        const row = document.createElement('div');
        row.className = 'compat-row';
        row.style.animationDelay = `${i * 0.05}s`;
        row.innerHTML = `<div class="compat-icon">${icon}</div><div class="compat-text"><b>${rule.label}</b><br><span>${res.msg}</span></div>`;
        list.appendChild(row);
    });
}

function updateSummaryBar() {
    const count = Object.keys(selected).length;
    const total = Object.values(selected).reduce((s, o) => s + o.price, 0);

    const sc = document.getElementById('sumCount');
    const sp = document.getElementById('sumPrice');
    const ss = document.getElementById('sumStatus');
    if (sc) sc.textContent = `${count} / ${PARTS.length}`;
    if (sp) sp.textContent = `${total.toLocaleString('pl')} zł`;

    const active = RULES.filter(r => r.parts.every(pid => selected[pid]));
    const results = active.map(r => runRule(r)).filter(Boolean);
    const hasErr = results.some(r => r.severity === 'err');
    const hasWarn = results.some(r => r.severity === 'warn');

    let txt = '–', col = 'var(--text-muted)';
    if (count === 0) txt = '–';
    else if (count < PARTS.length) txt = 'Kompletowanie…';
    else if (hasErr) { txt = '❌ Błędy!'; col = 'var(--err)'; }
    else if (hasWarn) { txt = '⚠️ Ostrzeżenia'; col = 'var(--warn)'; }
    else { txt = '✅ Wygląda OK'; col = 'var(--ok)'; }

    if (ss) { ss.textContent = txt; ss.style.color = col; }
}

function updateCheckButton() {
    const btn = document.getElementById('btnCheck');
    if (!btn) return;
    btn.disabled = Object.keys(selected).length < PARTS.length;
}

function runFinalCheck() {
    const results = RULES.map(r => runRule(r)).filter(Boolean);
    const hasErr = results.some(r => r.severity === 'err');
    const hasWarn = results.some(r => r.severity === 'warn');

    let cls, emoji, label, sub;
    if (hasErr) { cls = 'has-err'; emoji = '❌'; label = 'Zestaw ma problemy!'; sub = 'Niektóre części są niekompatybilne. Sprawdź czerwone sekcje powyżej i popraw wybór.'; }
    else if (hasWarn) { cls = 'partial'; emoji = '⚠️'; label = 'Zestaw wymaga weryfikacji'; sub = 'Ostrzeżenia mogą wymagać adapterów lub doprecyzowania. Skonsultuj z mechanikiem.'; }
    else { cls = 'all-ok'; emoji = '✅'; label = 'Zestaw jest kompatybilny!'; sub = 'Wszystkie części pasują do siebie. Możesz złożyć rower!'; }

    const issHTML = results.filter(r => r.severity !== 'ok').map(r =>
        `<div class="final-issue"><span>${r.severity === 'err' ? '❌' : '⚠️'}</span><span><b>${r.label}:</b> ${r.msg}</span></div>`
    ).join('');

    const fc = document.getElementById('finalCard');
    if (!fc) return;

    fc.className = 'final-card ' + cls;
    fc.style.display = 'block';
    fc.innerHTML = `<div class="final-big">${emoji}</div><div class="final-label">${label}</div><div class="final-sub">${sub}</div>${issHTML ? '<div class="final-issues">' + issHTML + '</div>' : ''}`;
    fc.style.animation = 'none';
    requestAnimationFrame(() => { fc.style.animation = 'cardIn .5s cubic-bezier(.22,1,.36,1) both'; });
    fc.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function resetAll() {
    Object.keys(selected).forEach(k => delete selected[k]);
    document.querySelectorAll('.opt-btn').forEach(b => b.classList.remove('selected'));
    document.querySelectorAll('.cfg-card').forEach(c => c.classList.remove('card-err', 'card-warn'));

    const finalCard = document.getElementById('finalCard');
    if (finalCard) finalCard.style.display = 'none';

    // Reset prawych paneli do placeholdera
    PARTS.forEach(p => {
        const dpBody = document.getElementById('dpbody_' + p.id);
        if (dpBody) dpBody.innerHTML = renderDpPlaceholder(p);
        const banner = document.getElementById('dpbanner_' + p.id);
        if (banner) banner.style.background = '';
    });

    updateAll();
}

/* ══════════════════════════════════════
   KOSZYK – localStorage (klucz 'cart')
   ══════════════════════════════════════ */
const CART_KEY = 'cart';

function loadCart() {
    try { return JSON.parse(localStorage.getItem(CART_KEY)) || []; }
    catch { return []; }
}
function saveCart(cart) { localStorage.setItem(CART_KEY, JSON.stringify(cart)); }

/* Aktualizuj przycisk koszyka w zależności od stanu */
function updateCartButton() {
    const btn = document.getElementById('btnCart');
    const label = document.getElementById('btnCartLabel');
    if (!btn) return;

    const count = Object.keys(selected).length;
    const allSelected = count === PARTS.length;

    const active = RULES.filter(r => r.parts.every(pid => selected[pid]));
    const results = active.map(r => runRule(r)).filter(Boolean);
    const hasErr = results.some(r => r.severity === 'err');

    if (!allSelected) {
        btn.disabled = true;
        btn.classList.remove('blocked');
        if (label) label.textContent = `Dodaj zestaw do koszyka (${count}/${PARTS.length})`;
    } else if (hasErr) {
        btn.disabled = false;
        btn.classList.add('blocked');
        if (label) label.textContent = 'Napraw błędy kompatybilności';
        btn.onclick = () => showToast('err', '❌', 'Nie można dodać zestawu', 'Popraw błędy kompatybilności zaznaczone na czerwono.');
    } else {
        btn.disabled = false;
        btn.classList.remove('blocked');
        const total = Object.values(selected).reduce((s, o) => s + o.price, 0);
        if (label) label.textContent = `Dodaj zestaw do koszyka – ${total.toLocaleString('pl')} zł`;
        btn.onclick = addSetToCart;
    }
}

function addSetToCart() {
    const active = RULES.filter(r => r.parts.every(pid => selected[pid]));
    const results = active.map(r => runRule(r)).filter(Boolean);
    if (results.some(r => r.severity === 'err')) {
        showToast('err', '❌', 'Błędy kompatybilności', 'Popraw zaznaczone na czerwono sekcje przed dodaniem do koszyka.');
        return;
    }

    const cfgItems = [];
    Object.entries(selected).forEach(([partId, opt]) => {
        const part = PARTS.find(p => p.id === partId);
        const cartId = 'cfg_' + partId + '_' + opt.id;
        cfgItems.push({
            id: cartId,
            name: `[Konfigurator] ${part.label}: ${opt.name}`,
            price: opt.price,
            qty: 1,
            sub: opt.sub,
            cfgPart: partId,
            emoji: part.icon || '🧩'
        });
    });

    // localStorage: usuń stare cfg_ i dodaj nowe cfgItems
    const prev = loadCart();
    const withoutCfg = prev.filter(x => !(typeof x.id === 'string' && x.id.startsWith('cfg_')));
    saveCart(withoutCfg.concat(cfgItems));
    updateNavCartBadge();

    fetch('index.php?page=cart_add_creator', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        credentials: 'include',
        body: JSON.stringify({ items: cfgItems })
    })
        .then(r => r.json().catch(() => null))
        .then(data => {
            if (!data || data.ok !== true) {
                showToast('err', '❌', 'Błąd koszyka', 'Serwer nie potwierdził dodania zestawu.');
                return;
            }
            const total = cfgItems.reduce((s, o) => s + (o.price * o.qty), 0);
            showToast('ok', '🛒', `Dodano ${cfgItems.length} części do koszyka`, `Łączna wartość zestawu: ${total.toLocaleString('pl')} zł`);
            window.location.href = 'index.php?page=cart';
        })
        .catch(err => {
            console.error(err);
            showToast('err', '❌', 'Błąd koszyka', 'Nie udało się wysłać zestawu do koszyka.');
        });

    const btn = document.getElementById('btnCart');
    if (btn) {
        btn.style.transform = 'scale(.96)';
        setTimeout(() => { btn.style.transform = ''; }, 180);
    }
}

/* Próbuje zaktualizować badge navbara VeloWorld (fcart-badge) */
function updateNavCartBadge() {
    try {
        const badge = document.getElementById('fcart-badge') || document.querySelector('.fcart-badge');
        if (!badge) return;
        const cart = loadCart();
        const total = cart.reduce((s, c) => s + (c.qty || 1), 0);
        badge.textContent = total;
        badge.style.display = total > 0 ? 'flex' : 'none';
    } catch (e) { }
}

/* Toast */
let toastTimer = null;
let toastVisible = false;

function showToast(type, icon, title, sub) {
    if (toastVisible) return;
    toastVisible = true;

    const t = document.getElementById('cfgToast');
    const ti = document.getElementById('cfgToastIcon');
    const tt = document.getElementById('cfgToastTitle');
    const ts = document.getElementById('cfgToastSub');
    if (!t) { toastVisible = false; return; }

    ti.textContent = icon;
    tt.textContent = title;
    ts.textContent = sub;
    t.className = 'cfg-toast show toast-' + type;

    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => {
        t.classList.remove('show');
        toastVisible = false;
    }, 3800);
}

init();

/* ✅ global exports dla onclick="" */
window.addSetToCart = addSetToCart;
window.resetAll = resetAll;
window.runFinalCheck = runFinalCheck;
window.selectOption = selectOption;