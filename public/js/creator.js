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
            { icon: '⚙️', key: 'Standard freehuba', val: 'Shimano HG (do 11-bieg) • Micro Spline (12-bieg Shim.) • SRAM XD (Eagle)' },
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
                    { icon: '🔗', key: 'Łańcuch', val: 'Shimano 11-biegowy (CN-HG601 itp.)' },
                ],
                compatNote: 'Prosty i niezawodny standard. Brak przerzutki przedniej = mniej awarii.',
                typeTags: ['1×11', 'HG', 'BSA', 'Shimano Deore']
            },

            {
                id: 'drv_2x10', name: '2×10 Szosa Shimano', sub: 'Shimano Tiagra / kaseta 11-34T', price: 680, tags: ['2x', 'road_drv', 'std_bb_need'],
                fields: [
                    { icon: '🔩', key: 'Suport BB', val: 'BSA lub PF (sprawdź ramę)' },
                    { icon: '⚙️', key: 'Freehub', val: 'Shimano HG 10-biegowy' },
                    { icon: '🎯', key: 'Dźwignie', val: 'STI lewa + prawa (zintegrowane z hamulcami szosowymi)' },
                    { icon: '⚠️', key: 'Uwaga', val: 'Dźwignie STI NIE ciągną hamulców MTB – musisz wybrać hamulce szosowe!' },
                ],
                compatNote: 'Klasyczny szosowy zestaw. Dźwignie STI – hamulce muszą być szosowe.',
                typeTags: ['2×10', 'HG', 'STI', 'Szosa', 'Tiagra']
            },

            {
                id: 'drv_1x12', name: '1×12 SRAM Eagle', sub: 'SRAM GX Eagle / kaseta 10-52T', price: 1400, tags: ['1x', 'mtb_drv', 'dub_bb'],
                fields: [
                    { icon: '🔩', key: 'Suport BB', val: 'SRAM DUB (BSA DUB 73mm lub PF DUB)' },
                    { icon: '⚙️', key: 'Freehub', val: 'SRAM XD Driver – INNY niż Shimano HG!' },
                    { icon: '🎯', key: 'Dźwignie', val: 'SRAM trigger lub AXS (bezprzewodowy)' },
                    { icon: '🔗', key: 'Łańcuch', val: 'SRAM Eagle 12-biegowy (dedykowany)' },
                ],
                compatNote: 'XD Driver wymaga specjalnej piasty – sprawdź koła przed zakupem!',
                typeTags: ['1×12', 'XD', 'SRAM DUB', 'Eagle', 'AXS']
            },

            {
                id: 'drv_1x12r', name: '1×12 Shimano SLX', sub: 'Shimano SLX M7100 / kaseta 10-51T', price: 1100, tags: ['1x', 'mtb_drv', 'std_bb_need'],
                fields: [
                    { icon: '🔩', key: 'Suport BB', val: 'BSA 68/73mm (standard Shimano)' },
                    { icon: '⚙️', key: 'Freehub', val: 'Shimano Micro Spline – INNY niż HG 11-bieg!' },
                    { icon: '🎯', key: 'Dźwignie', val: 'Shimano trigger I-Spec EV' },
                    { icon: '⚠️', key: 'Uwaga', val: 'Stare piasty HG 11-bieg NIE obsługują kasety 12-bieg Shimano' },
                ],
                compatNote: 'Micro Spline – upewnij się że koła mają właściwy freehub zanim kupisz!',
                typeTags: ['1×12', 'Micro Spline', 'BSA', 'SLX', 'Shimano']
            },
        ]
    },

    {
        id: 'wheels', label: 'Koła', icon: '⭕',
        categoryName: 'Koła (Wheelset)',
        categoryTagline: 'Rozmiar, standard osi i freehub – trzy rzeczy do sprawdzenia',
        categoryFields: [
            { icon: '📐', key: 'Rozmiary', val: '26" (retro) • 27,5" • 29" (XC/Trail) • 700c (szosa/gravel)' },
            { icon: '📏', key: 'Standard osi przedniej', val: 'QR 9×100mm • Thru 15×100mm • Boost 15×110mm' },
            { icon: '📏', key: 'Standard osi tylnej', val: 'QR 9×135mm • Thru 12×142mm • Boost 12×148mm' },
            { icon: '⚙️', key: 'Standard freehuba', val: 'Shimano HG • Micro Spline • SRAM XD • Campagnolo' },
        ],
        categoryTags: ['29"', '27,5"', '700c', 'Boost', 'Thru', 'QR', 'HG', 'XD'],
        categoryCompat: 'Oś przednia → widelec. Oś tylna → rama. Freehub → napęd (kaseta). Trzy połączenia do sprawdzenia!',
        options: [
            {
                id: 'wh_29_boost', name: 'Koła 29" Boost', sub: 'DT Swiss M1900 / 15×110 + 12×148', price: 1200, tags: ['29er', 'boost_front', 'boost_rear'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Boost 15×110mm' },
                    { icon: '📏', key: 'Oś tylna', val: 'Boost 12×148mm' },
                    { icon: '⚙️', key: 'Freehub', val: 'Shimano HG (11-bieg) – opcja Micro Spline lub XD dostępna' },
                    { icon: '🎯', key: 'Pasuje do', val: 'Hardtail Boost, Enduro Boost' },
                ],
                compatNote: 'Koła muszą mieć freehub odpowiedni do Twojej kasety (HG/Micro Spline/XD).',
                typeTags: ['29"', 'Boost 110/148', 'HG']
            },

            {
                id: 'wh_27_qr', name: 'Koła 27,5" QR', sub: 'WTB ST Light / QR 9mm + QR 135mm', price: 680, tags: ['275', 'qr_front', 'qr_rear'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'QR 9×100mm' },
                    { icon: '📏', key: 'Oś tylna', val: 'QR 9×135mm' },
                    { icon: '⚠️', key: 'Uwaga', val: 'NIE pasuje do ram Boost ani Thru-Axle' },
                    { icon: '⚙️', key: 'Freehub', val: 'Shimano HG' },
                ],
                compatNote: 'Stary standard – sprawdź czy Twoja rama i widelec mają QR, nie Thru-Axle.',
                typeTags: ['27,5"', 'QR', 'Legacy', 'HG']
            },

            {
                id: 'wh_700c_thru', name: 'Koła 700c Thru', sub: 'Fulcrum Racing 600 / 12×100 + 12×142', price: 1100, tags: ['700c', 'thru_front', 'thru_rear'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Thru 12×100mm' },
                    { icon: '📏', key: 'Oś tylna', val: 'Thru 12×142mm' },
                    { icon: '⚙️', key: 'Freehub', val: 'Shimano HG 11-biegowy' },
                    { icon: '🎯', key: 'Pasuje do', val: 'Ramy szosowe i gravel z Thru-Axle' },
                ],
                compatNote: 'Standard szosowy i gravel. Stabilniejsze niż QR dzięki Thru-Axle.',
                typeTags: ['700c', 'Thru 100/142', 'HG', 'Szosa/Gravel']
            },

            {
                id: 'wh_29_mullet', name: '29"/27,5" Mullet', sub: 'Mix Boost / przód 29" tył 27,5"', price: 1400, tags: ['mullet', 'boost_front', 'boost_rear'],
                fields: [
                    { icon: '📏', key: 'Oś przednia', val: 'Boost 15×110mm (29")' },
                    { icon: '📏', key: 'Oś tylna', val: 'Boost 12×148mm (27,5")' },
                    { icon: '💡', key: 'Zaleta', val: 'Toczenie 29" z przodu + manewrowość 27,5" z tyłu' },
                    { icon: '⚠️', key: 'Uwaga', val: 'Rama musi mieć clearance na 27,5"+ opony z tyłu' },
                ],
                compatNote: 'Nie każda rama enduro ma prześwit na mullet. Sprawdź specyfikację ramy.',
                typeTags: ['Mullet', '29"/27,5"', 'Boost', 'Enduro']
            },
        ]
    },

    {
        id: 'brakes', label: 'Hamulce', icon: '🛑',
        categoryName: 'Hamulce',
        categoryTagline: 'Tarczowe vs obręczowe – standard mocowania i typ dźwigni',
        categoryFields: [
            { icon: '🔧', key: 'Typy', val: 'V-Brake (obręcz) • Mechaniczne tarczowe • Hydrauliczne tarczowe' },
            { icon: '🔩', key: 'Mocowanie tarczowe', val: 'Post Mount (PM) • Flat Mount (FM – szosa/gravel) • IS Mount (stary)' },
            { icon: '📐', key: 'Rozmiary tarcz', val: '140mm (lekkie) • 160mm (standard) • 180–203mm (DH/Enduro)' },
        ],
        categoryTags: ['Hydrauliczne', 'Mechaniczne', 'Flat Mount', 'Post Mount', 'V-Brake'],
        categoryCompat: 'Typ dźwigni musi pasować do shifterów napędu (STI szosowe ≠ dźwignie MTB).',
        options: [
            {
                id: 'br_mech', name: 'Mechaniczne V-Brake', sub: 'Shimano BR-R353 / linki', price: 120, tags: ['v_brake', 'no_disc'],
                fields: [
                    { icon: '⚠️', key: 'Wymaga', val: 'Haczyków V-Brake w ramie i widelcu – ramy MTB/tarczowe ich NIE mają!' },
                    { icon: '🎯', key: 'Koła', val: 'Aluminiowa obręcz hamulcowa (nie carbon)' },
                    { icon: '🎯', key: 'Dźwignie', val: 'Dedykowane do V-Brake (dłuższy skok linki)' },
                ],
                compatNote: 'Tylko do starszych ram z haczykami. MTB i ramy tarczowe → wybierz inne hamulce.',
                typeTags: ['V-Brake', 'Obręczowe', 'Mechaniczne', 'Legacy']
            },

            {
                id: 'br_hyd_mtb', name: 'Hydrauliczne MTB', sub: 'Shimano MT200 / tarcze 180mm', price: 380, tags: ['disc', 'flat_mount'],
                fields: [
                    { icon: '🔩', key: 'Mocowanie', val: 'Flat Mount lub Post Mount (adapter w zestawie)' },
                    { icon: '📐', key: 'Tarcze', val: '180mm – adapter 203mm dostępny' },
                    { icon: '⚠️', key: 'Uwaga', val: 'Olejowe dźwignie – NIE kompatybilne z szosowymi STI!' },
                    { icon: '🎯', key: 'Piasty', val: 'Standard 6-śrub lub Centerlock' },
                ],
                compatNote: 'MTB hamulce wymagają MTB dźwigni (nie STI). Niezawodne w błocie i deszczu.',
                typeTags: ['Hydrauliczne', 'Flat/Post Mount', 'MTB', '180mm']
            },

            {
                id: 'br_hyd_road', name: 'Hydrauliczne Szosa', sub: 'Shimano RS505 / tarcze 160mm', price: 680, tags: ['disc', 'flat_mount', 'road_brake'],
                fields: [
                    { icon: '🔩', key: 'Mocowanie', val: 'Flat Mount (standard szosowy)' },
                    { icon: '📐', key: 'Tarcze', val: '160mm Flat Mount (180mm z adapterem)' },
                    { icon: '✅', key: 'Dźwignie', val: 'Szosowe STI z hydrauliką (Shimano 105, Tiagra, Ultegra)' },
                ],
                compatNote: 'Jedyne hamulce do szosowych dźwigni STI (hydraulika). Flat Mount obligatoryjny.',
                typeTags: ['Hydrauliczne', 'Flat Mount', 'Szosa', 'STI', '160mm']
            },

            {
                id: 'br_mech_disc', name: 'Mech. Tarczowe', sub: 'TRP Spyre / tarcze 160mm', price: 290, tags: ['disc', 'flat_mount'],
                fields: [
                    { icon: '🔩', key: 'Mocowanie', val: 'Flat Mount lub Post Mount (z adapterem)' },
                    { icon: '🎯', key: 'Dźwignie', val: 'Pasują do STI szosowych i dźwigni MTB' },
                    { icon: '📐', key: 'Tarcze', val: '160mm' },
                    { icon: '💡', key: 'Zaleta', val: 'Prosta obsługa, brak oleju, łatwy serwis' },
                ],
                compatNote: 'Kompromis: prostota linek + lepsza siła niż V-Brake. Kompatybilne z różnymi dźwigniami.',
                typeTags: ['Mech. Tarczowe', 'Flat Mount', 'Szosa/MTB', '160mm']
            },
        ]
    },

    {
        id: 'saddle', label: 'Siodło', icon: '🪑',
        categoryName: 'Siodło i sztyca',
        categoryTagline: 'Komfort i ergonomia – ważniejsze niż myślisz',
        categoryFields: [
            { icon: '📏', key: 'Średnica sztycy', val: '27,2mm (standard) • 30,9mm • 31,6mm – sprawdź tubę ramy!' },
            { icon: '🔧', key: 'Typy sztycowania', val: 'Zwykła (stała wysokość) • Dropper Post (regulowana pod jazdą)' },
            { icon: '📐', key: 'Szerokość siodła', val: 'Dobierz do rozstawu kości kulszowych: ~130mm, 143mm, 155mm' },
        ],
        categoryTags: ['Dropper Post', 'Standard', 'Race', 'Trail', 'Ergonomia'],
        categoryCompat: 'Średnica sztycy musi pasować do tuby siodłowej ramy. Dropper wymaga internal routing.',
        options: [
            {
                id: 'sad_sport', name: 'Siodło Sport', sub: 'Selle Royal Asphalt / 275×143mm', price: 180, tags: ['saddle_standard'],
                fields: [
                    { icon: '📏', key: 'Sztyca', val: '27,2mm lub 30,9mm (sprawdź ramę)' },
                    { icon: '🎯', key: 'Przeznaczenie', val: 'Rekreacja, trekking, codzienna jazda' },
                    { icon: '📐', key: 'Pozycja', val: 'Wyprostowana lub lekko pochylona' },
                ],
                compatNote: 'Standardowe szyny – pasuje do każdego zacisku sztycy. Komfortowa pianka.',
                typeTags: ['Sport', 'Rekreacja', 'Standard', '143mm']
            },

            {
                id: 'sad_trail', name: 'Siodło Trail MTB', sub: 'WTB Trail Boss / 275×142mm', price: 280, tags: ['saddle_standard'],
                fields: [
                    { icon: '📏', key: 'Sztyca', val: '27,2 / 30,9 / 31,6mm' },
                    { icon: '🎯', key: 'Przeznaczenie', val: 'MTB, trail, enduro' },
                    { icon: '🛡️', key: 'Tapicerka', val: 'Wzmocniona, odporna na otarcia' },
                ],
                compatNote: 'Wąski nos do swobodnego ruchu bioder. Pasuje do sztycowania standardowego i dropperowego.',
                typeTags: ['Trail', 'MTB', 'Wzmocnione', '142mm']
            },

            {
                id: 'sad_race', name: 'Siodło Race', sub: "fi'zi:k Argo Tempo / 275×142mm", price: 420, tags: ['saddle_standard'],
                fields: [
                    { icon: '📏', key: 'Sztyca', val: 'Standardowe szyny Ti/Cr-Mo' },
                    { icon: '🎯', key: 'Przeznaczenie', val: 'Szosa, wyścigi, agresywna pozycja' },
                    { icon: '💡', key: 'Wycięcie centralne', val: 'Redukuje ucisk przy pochylonej pozycji' },
                ],
                compatNote: 'Do bardzo pochylonej geometrii szosowej. Niekomfortowe przy wyprostowanej pozycji.',
                typeTags: ['Race', 'Szosa', 'Wycięcie', '142mm']
            },

            {
                id: 'sad_dropper', name: 'Dropper Post 125mm', sub: 'KS Lev Ci / pilot na kierownicy', price: 680, tags: ['saddle_dropper'],
                fields: [
                    { icon: '📏', key: 'Średnica', val: '27,2 / 30,9 / 31,6mm – sprawdź tubę ramy!' },
                    { icon: '🔧', key: 'Routing', val: 'Internal (przez ramę) – rama musi mieć otwór!' },
                    { icon: '🎮', key: 'Pilot', val: 'Montowany na kierownicy, clamp 22,2mm' },
                    { icon: '📐', key: 'Skok', val: '125mm – sprawdź długość tuby ramy' },
                ],
                compatNote: 'Dropper = must-have w MTB. Upewnij się że rama ma internal routing i właściwą średnicę.',
                typeTags: ['Dropper Post', 'MTB', 'Internal', '125mm']
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
        fixWarn: 'Rama Press-Fit + napęd BSA → kup adapter PF30→BSA lub DUB PF. Koszt ok. 60–120 zł.'
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
        fixWarn: 'Amortyzator MTB: 29" lub 27,5". Widelec karbonowy szosowy: tylko 700c.'
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
        fixErr: 'Rama MTB ma tylko mocowanie tarczowe (Flat/Post Mount). Wybierz hamulce tarczowe.'
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
        fixWarn: 'SRAM Eagle 12-bieg → freehub XD. Shimano 12-bieg → Micro Spline. Shimano do 11-bieg → HG.'
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
        fixWarn: 'Dźwignie STI (szosa) mają inny skok linki niż dźwignie MTB. Użyj hamulców szosowych lub pełnej grupy MTB.'
    },
];

/* ══════════════════════════════════════
   STAN
   ══════════════════════════════════════ */
const selected = {};

function init() {
    makeBgDots(); renderSteps(); renderSections(); updateAll();
}

function makeBgDots() {
    const c = document.getElementById('bgDots');
    for (let i = 0; i < 20; i++) {
        const s = document.createElement('span'); const sz = Math.random() * 6 + 3;
        s.style.cssText = `width:${sz}px;height:${sz}px;left:${Math.random() * 100}%;background:hsl(${220 + Math.random() * 60},70%,60%);animation-duration:${9 + Math.random() * 14}s;animation-delay:${-Math.random() * 12}s;`;
        c.appendChild(s);
    }
}

function renderSteps() {
    const row = document.getElementById('stepsRow'); row.innerHTML = '';
    PARTS.forEach((p, i) => {
        const div = document.createElement('div'); div.className = 'cfg-step';
        div.innerHTML = `<div class="step-dot" id="step_${p.id}"><span class="step-num">${i + 1}</span><div class="step-label">${p.label}</div></div>${i < PARTS.length - 1 ? `<div class="step-line" id="stepline_${i}"></div>` : ''}`;
        row.appendChild(div);
    });
}

/* ══════════════════════════════════════
   RENDER SEKCJI z Discord panelem
   ══════════════════════════════════════ */
function renderSections() {
    const container = document.getElementById('sectionsContainer'); container.innerHTML = '';
    PARTS.forEach((p, pi) => {
        const wrap = document.createElement('div'); wrap.id = 'wrap_' + p.id;

        // Siatka: karta + panel
        const grid = document.createElement('div');
        grid.className = 'section-wrap';
        grid.style.animationDelay = `${pi * 0.06}s`;

        // ── LEWA: Karta ──
        const card = document.createElement('div'); card.className = 'cfg-card'; card.id = 'card_' + p.id;
        const optHTML = p.options.map(o => `
      <button class="opt-btn" id="opt_${o.id}" onclick="selectOption('${p.id}','${o.id}')">
        <div class="opt-price">${o.price} zł</div>
        <div class="opt-name">${o.name}</div>
        <div class="opt-sub">${o.sub}</div>
      </button>`).join('');
        card.innerHTML = `<div class="cfg-card-title"><span class="cat-icon">${p.icon}</span>${p.label}</div><div class="options-grid" id="grid_${p.id}">${optHTML}</div>`;

        // ── PRAWA: Discord panel ──
        const dp = document.createElement('div'); dp.className = 'discord-panel'; dp.id = 'dp_' + p.id;
        dp.innerHTML = `
      <div class="dp-banner" id="dpbanner_${p.id}">
        <div class="dp-banner-icon" id="dpicon_${p.id}">${p.icon}</div>
      </div>
      <div class="dp-body" id="dpbody_${p.id}">
        ${renderDpCategory(p)}
      </div>
    `;

        grid.appendChild(card);
        grid.appendChild(dp);

        // ── INLINE COMPAT (pod griddem) ──
        const inlineDiv = document.createElement('div'); inlineDiv.className = 'inline-compat'; inlineDiv.id = 'inline_' + p.id; inlineDiv.style.display = 'none';

        wrap.appendChild(grid);
        wrap.appendChild(inlineDiv);
        container.appendChild(wrap);
    });
}

/* Render panelu kategorii (stan domyślny) */
function renderDpCategory(p) {
    const fieldsHTML = p.categoryFields.map(f => `
    <div class="dp-field-row">
      <div class="dp-field-icon">${f.icon}</div>
      <div class="dp-field-content">
        <span class="dp-field-key">${f.key}</span>
        <span class="dp-field-val">${f.val}</span>
      </div>
    </div>`).join('');
    const tagsHTML = p.categoryTags.map(t => `<span class="dp-tag">${t}</span>`).join('');
    return `
    <div class="dp-selected-badge" id="dpbadge_${p.id}">✓ Wybrano</div>
    <div class="dp-name">${p.categoryName}</div>
    <div class="dp-tagline">${p.categoryTagline}</div>
    <div class="dp-divider"></div>
    <div class="dp-section">
      <div class="dp-section-label">Informacje</div>
      ${fieldsHTML}
    </div>
    <div class="dp-section">
      <div class="dp-section-label">Z czym łączyć</div>
      <div class="dp-field-row">
        <div class="dp-field-icon">🔗</div>
        <div class="dp-field-content">
          <span class="dp-field-key">Kompatybilność</span>
          <span class="dp-field-val">${p.categoryCompat}</span>
        </div>
      </div>
    </div>
    <div class="dp-section">
      <div class="dp-section-label">Tagi</div>
      <div class="dp-tags">${tagsHTML}</div>
    </div>
  `;
}

/* Render panelu konkretnej opcji */
function renderDpOption(p, opt) {
    const fieldsHTML = opt.fields.map(f => `
    <div class="dp-field-row">
      <div class="dp-field-icon">${f.icon}</div>
      <div class="dp-field-content">
        <span class="dp-field-key">${f.key}</span>
        <span class="dp-field-val">${f.val}</span>
      </div>
    </div>`).join('');
    const tagsHTML = opt.typeTags.map(t => `<span class="dp-tag">${t}</span>`).join('');
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
          <span class="dp-field-val">${opt.compatNote}</span>
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
    const opt = part.options.find(o => o.id === optId);
    part.options.forEach(o => { const b = document.getElementById('opt_' + o.id); if (b) b.classList.remove('selected'); });
    selected[partId] = opt;
    document.getElementById('opt_' + optId).classList.add('selected');
    document.getElementById('finalCard').style.display = 'none';

    // Aktualizuj Discord panel
    const dpBody = document.getElementById('dpbody_' + partId);
    dpBody.innerHTML = renderDpOption(part, opt);
    dpBody.classList.remove('refreshing');
    void dpBody.offsetWidth; // reflow
    dpBody.classList.add('refreshing');

    // Zmień kolor bannera
    const banner = document.getElementById('dpbanner_' + partId);
    banner.style.background = 'linear-gradient(135deg,rgba(79,92,255,.5) 0%,rgba(30,40,120,.55) 100%)';

    updateAll();
}

/* ══════════════════════════════════════
   UPDATE
   ══════════════════════════════════════ */
function updateAll() {
    updateSteps(); updateProgress(); updateCompatPanel(); updateSummaryBar(); updateCheckButton(); updateCartButton(); updateGlobalCompat();
}

function runRule(rule) {
    const res = rule.check(selected); if (res === null) return null;
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
        msgs = active
            .filter(r => r.severity === 'err')
            .map(r => `• ${r.label}: ${r.msg}`);
    }
    else if (hasWarn) {
        cls = 'warn';
        title = '⚠️ Wymagana weryfikacja';
        msgs = active
            .filter(r => r.severity === 'warn')
            .map(r => `• ${r.label}: ${r.msg}`);
    }
    else {
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

function updateInlineCompat() {
    const allR = RULES.map(r => { const res = runRule(r); if (!res) return null; return { rule: r, ...res }; }).filter(Boolean);
    PARTS.forEach(p => {
        const div = document.getElementById('inline_' + p.id); if (!div) return;
        const rel = allR.filter(r => r.rule.showUnder.includes(p.id) && r.rule.parts.every(pid => selected[pid]));
        const show = rel.filter(r => r.severity !== 'ok');
        const card = document.getElementById('card_' + p.id);
        if (show.length === 0) { div.style.display = 'none'; if (card) card.classList.remove('card-err', 'card-warn'); return; }
        const hasErr = show.some(r => r.severity === 'err');
        if (card) { card.classList.toggle('card-err', hasErr); card.classList.toggle('card-warn', !hasErr); }
        div.style.display = 'flex';
        div.innerHTML = show.map((r, i) => `
      <div class="ic-row ${r.severity}" style="animation-delay:${i * 0.05}s">
        <div class="ic-icon">${r.severity === 'err' ? '❌' : '⚠️'}</div>
        <div class="ic-body">
          <div class="ic-label">${r.label}</div>
          <div class="ic-msg ${r.severity}-msg">${r.msg}</div>
          ${r.fix ? `<div class="ic-fix">💡 ${r.fix}</div>` : ''}
        </div>
      </div>`).join('');
    });
}

function updateSteps() {
    PARTS.forEach((p, i) => {
        const dot = document.getElementById('step_' + p.id); const line = document.getElementById('stepline_' + i);
        dot.classList.remove('active', 'done', 'has-err', 'has-warn'); if (line) line.classList.remove('done');
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
    document.getElementById('progressBar').style.width = (Object.keys(selected).length / PARTS.length * 100) + '%';
}

function updateCompatPanel() {
    const list = document.getElementById('compatList');
    const active = RULES.filter(r => r.parts.every(pid => selected[pid]));
    if (active.length === 0) { list.innerHTML = '<div style="color:var(--text-muted);font-size:.8rem;">Wybierz części, aby zobaczyć sprawdzenie kompatybilności.</div>'; return; }
    list.innerHTML = '';
    active.forEach((rule, i) => {
        const res = runRule(rule); if (!res) return;
        const icon = res.severity === 'ok' ? '✅' : res.severity === 'warn' ? '⚠️' : '❌';
        const row = document.createElement('div'); row.className = 'compat-row'; row.style.animationDelay = `${i * 0.05}s`;
        row.innerHTML = `<div class="compat-icon">${icon}</div><div class="compat-text"><b>${rule.label}</b><br><span>${res.msg}</span></div>`;
        list.appendChild(row);
    });
}

function updateSummaryBar() {
    const count = Object.keys(selected).length; const total = Object.values(selected).reduce((s, o) => s + o.price, 0);
    document.getElementById('sumCount').textContent = `${count} / ${PARTS.length}`;
    document.getElementById('sumPrice').textContent = `${total.toLocaleString('pl')} zł`;
    const active = RULES.filter(r => r.parts.every(pid => selected[pid]));
    const results = active.map(r => runRule(r)).filter(Boolean);
    const hasErr = results.some(r => r.severity === 'err'); const hasWarn = results.some(r => r.severity === 'warn');
    let txt = '–', col = 'var(--text-muted)';
    if (count === 0) txt = '–';
    else if (count < PARTS.length) txt = 'Kompletowanie…';
    else if (hasErr) { txt = '❌ Błędy!'; col = 'var(--err)'; }
    else if (hasWarn) { txt = '⚠️ Ostrzeżenia'; col = 'var(--warn)'; }
    else { txt = '✅ Wygląda OK'; col = 'var(--ok)'; }
    const sv = document.getElementById('sumStatus'); sv.textContent = txt; sv.style.color = col;
}

function updateCheckButton() {
    document.getElementById('btnCheck').disabled = Object.keys(selected).length < PARTS.length;
}

function runFinalCheck() {
    const results = RULES.map(r => runRule(r)).filter(Boolean);
    const hasErr = results.some(r => r.severity === 'err'); const hasWarn = results.some(r => r.severity === 'warn');
    let cls, emoji, label, sub;
    if (hasErr) { cls = 'has-err'; emoji = '❌'; label = 'Zestaw ma problemy!'; sub = 'Niektóre części są niekompatybilne. Sprawdź czerwone sekcje powyżej i popraw wybór.'; }
    else if (hasWarn) { cls = 'partial'; emoji = '⚠️'; label = 'Zestaw wymaga weryfikacji'; sub = 'Ostrzeżenia mogą wymagać adapterów lub doprecyzowania. Skonsultuj z mechanikiem.'; }
    else { cls = 'all-ok'; emoji = '✅'; label = 'Zestaw jest kompatybilny!'; sub = 'Wszystkie części pasują do siebie. Możesz złożyć rower!'; }
    const issHTML = results.filter(r => r.severity !== 'ok').map(r => `<div class="final-issue"><span>${r.severity === 'err' ? '❌' : '⚠️'}</span><span><b>${r.label}:</b> ${r.msg}</span></div>`).join('');
    const fc = document.getElementById('finalCard');
    fc.className = 'final-card ' + cls; fc.style.display = 'block';
    fc.innerHTML = `<div class="final-big">${emoji}</div><div class="final-label">${label}</div><div class="final-sub">${sub}</div>${issHTML ? '<div class="final-issues">' + issHTML + '</div>' : ''}`;
    fc.style.animation = 'none'; requestAnimationFrame(() => { fc.style.animation = 'cardIn .5s cubic-bezier(.22,1,.36,1) both'; });
    fc.scrollIntoView({ behavior: 'smooth', block: 'start' });
}

function resetAll() {
    Object.keys(selected).forEach(k => delete selected[k]);
    document.querySelectorAll('.opt-btn').forEach(b => b.classList.remove('selected'));
    document.querySelectorAll('.cfg-card').forEach(c => c.classList.remove('card-err', 'card-warn'));
    document.getElementById('finalCard').style.display = 'none';
    // Reset Discord paneli do kategorii
    PARTS.forEach(p => {
        const dpBody = document.getElementById('dpbody_' + p.id);
        if (dpBody) { dpBody.innerHTML = renderDpCategory(p); }
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

    // Sprawdź błędy (warn jest ok, err blokuje)
    const active = RULES.filter(r => r.parts.every(pid => selected[pid]));
    const results = active.map(r => runRule(r)).filter(Boolean);
    const hasErr = results.some(r => r.severity === 'err');

    if (!allSelected) {
        btn.disabled = true;
        btn.classList.remove('blocked');
        label.textContent = `Dodaj zestaw do koszyka (${count}/${PARTS.length})`;
    } else if (hasErr) {
        btn.disabled = false;
        btn.classList.add('blocked');
        label.textContent = 'Napraw błędy kompatybilności';
        btn.onclick = () => showToast('err', '❌', 'Nie można dodać zestawu', 'Popraw błędy kompatybilności zaznaczone na czerwono.');
    } else {
        btn.disabled = false;
        btn.classList.remove('blocked');
        const total = Object.values(selected).reduce((s, o) => s + o.price, 0);
        label.textContent = `Dodaj zestaw do koszyka – ${total.toLocaleString('pl')} zł`;
        btn.onclick = addSetToCart;
    }
}

function addSetToCart() {
    // Ostateczny check błędów
    const active = RULES.filter(r => r.parts.every(pid => selected[pid]));
    const results = active.map(r => runRule(r)).filter(Boolean);
    if (results.some(r => r.severity === 'err')) {
        showToast('err', '❌', 'Błędy kompatybilności', 'Popraw zaznaczone na czerwono sekcje przed dodaniem do koszyka.');
        return;
    }

    const cart = loadCart();
    const addedNames = [];

    Object.entries(selected).forEach(([partId, opt]) => {
        const part = PARTS.find(p => p.id === partId);
        // ID generujemy jako cfg_ + partId żeby nie kolidować z ID produktów sklepu
        const cartId = 'cfg_' + partId + '_' + opt.id;

        const item = {
            id: cartId,
            name: `[Konfigurator] ${part.label}: ${opt.name}`,
            price: opt.price,
            qty: 1,
            // meta – pomocnicze, ignorowane przez koszyk jeśli nie obsługuje
            sub: opt.sub,
            cfgPart: partId,
        };

        const existing = cart.find(c => c.id === cartId);
        if (existing) existing.qty += 1;
        else cart.push(item);

        addedNames.push(opt.name);
    });

    saveCart(cart);


    fetch('/cart_add_creator.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            items: JSON.parse(localStorage.getItem('cart') || '[]')
        })
    });



    // Odśwież badge koszyka jeśli VeloWorld ma fcart-badge w navbarze
    updateNavCartBadge();

    const total = Object.values(selected).reduce((s, o) => s + o.price, 0);
    showToast('ok', '🛒', `Dodano ${addedNames.length} części do koszyka`, `Łączna wartość zestawu: ${total.toLocaleString('pl')} zł`);

    // Animacja przycisku
    const btn = document.getElementById('btnCart');
    btn.style.transform = 'scale(.96)';
    setTimeout(() => { btn.style.transform = ''; }, 180);
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

    // ✅ jeśli toast już jest widoczny – NIE pokazuj drugiego
    if (toastVisible) return;
    toastVisible = true;

    const t = document.getElementById('cfgToast');
    const ti = document.getElementById('cfgToastIcon');
    const tt = document.getElementById('cfgToastTitle');
    const ts = document.getElementById('cfgToastSub');
    if (!t) {
        toastVisible = false;
        return;
    }

    ti.textContent = icon;
    tt.textContent = title;
    ts.textContent = sub;
    t.className = 'cfg-toast show toast-' + type;

    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => {
        t.classList.remove('show');
        toastVisible = false; // ✅ zwalniamy blokadę
    }, 3800);
}

init();