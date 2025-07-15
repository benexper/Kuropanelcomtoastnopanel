
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özel Kampanya - ABCD.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2ecc71;
            --accent: #3498db;
            --text: #ecf0f1;
            --text-light: #bdc3c7;
            --background: #1a1a1a;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--background);
            color: var(--text);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        
        /* Campaign Section */
        .campaign-section {
            text-align: center;
            padding: 40px 20px;
            margin: 40px 0;
            background: linear-gradient(135deg, rgba(46, 204, 113, 0.2), rgba(39, 174, 96, 0.2));
            border-radius: 16px;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(46, 204, 113, 0.3);
            position: relative;
            overflow: hidden;
        }

        .campaign-section::before {
            content: "";
            position: absolute;
            top: -10px;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(to right, #2ecc71, #27ae60);
            animation: glow 2s infinite alternate;
        }

        .campaign-title {
            font-size: 28px;
            margin-bottom: 15px;
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            background: linear-gradient(to right, #2ecc71, #27ae60);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 0 0 10px rgba(46, 204, 113, 0.3);
        }

        .campaign-badge {
            display: inline-block;
            background: linear-gradient(to right, #e74c3c, #c0392b);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
            animation: shake 0.5s infinite alternate;
            transform-origin: center bottom;
        }

        .campaign-content {
            font-size: 18px;
            margin-bottom: 20px;
            color: var(--text-light);
        }

        .campaign-highlight {
            font-weight: bold;
            color: #2ecc71;
            font-size: 20px;
        }

        .campaign-button {
            display: inline-block;
            padding: 12px 30px;
            background: linear-gradient(to right, #2ecc71, #27ae60);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            animation: pulse 2s infinite;
            box-shadow: 0 10px 20px rgba(46, 204, 113, 0.4);
            margin-top: 10px;
        }

        .campaign-button:hover {
            animation: none;
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 30px rgba(46, 204, 113, 0.6);
        }

        .campaign-note {
            font-size: 14px;
            color: var(--text);
            margin-top: 15px;
            font-style: italic;
        }

        /* Animations */
        @keyframes glow {
            0% { opacity: 0.7; }
            100% { opacity: 1; }
        }

        @keyframes shake {
            0% { transform: rotate(-5deg); }
            100% { transform: rotate(5deg); }
        }

        @keyframes pulse {
            0% { transform: scale(1); box-shadow: 0 10px 20px rgba(46, 204, 113, 0.4); }
            50% { transform: scale(1.05); box-shadow: 0 15px 30px rgba(46, 204, 113, 0.6); }
            100% { transform: scale(1); box-shadow: 0 10px 20px rgba(46, 204, 113, 0.4); }
        }

        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }

        /* Popup styling */
        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            padding: 20px;
        }

        .popup-content {
            max-width: 600px;
            width: 100%;
            animation: popIn 0.3s ease-out;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #e74c3c;
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 10;
        }

        @keyframes popIn {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .campaign-title {
                font-size: 22px;
            }
            
            .campaign-content {
                font-size: 16px;
            }
            
            .campaign-highlight {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="popup-overlay">
        <button class="close-btn" onclick="window.close()">×</button>
        <div class="popup-content">
            <!-- Campaign Section -->
            <section class="container campaign-section">
                <div class="campaign-badge">ÖZEL KAMPANYA</div>
                <h2 class="campaign-title">1 MÜŞTERİ GETİRENE 1 AY BEDAVA!</h2>
                <p class="campaign-content">
                    Yeni Kampanyamiz İle <span class="campaign-highlight">1 müşteri getirip bizden Panel Satın Aldığında</span>, 
                    <span class="campaign-highlight">1 aylık full paket panel hizmetiniz ÜCRETSİZ!</span>
                </p>
                <p class="campaign-content">
                    Kazanmak çok basit:<br>
                    1) Panelimizi arkadaşlarınıza önerin<br>
                    2) Arkadaşınız satın aldığında sizden geldiğini söylesin<br>
                    3) Biz size 1 aylık ücretsiz panel hakkı tanıyalım!
                </p>
                <a href="https://t.me/benexper" target="_blank" class="campaign-button">KATIL VE KAZAN</a>
                <p class="campaign-note">* Kampanya koşulları için lütfen Telegram üzerinden bilgi alınız.</p>
            </section>
        </div>
    </div>

    <script>
        // Close popup when clicking outside content
        document.querySelector('.popup-overlay').addEventListener('click', function(e) {
            if (e.target === this) {
                window.close();
            }
        });

        // Close with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                window.close();
            }
        });
    </script>
</body>
</html>
