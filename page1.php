<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Everyone</title>
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1501004318641-b39e6451bec6') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            animation: zoomBackground 20s infinite alternate ease-in-out;
            padding: 20px;
        }

        @keyframes zoomBackground {
            0% { background-size: 100% auto; }
            100% { background-size: 110% auto; }
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
            max-width: 800px;
            line-height: 1.6;
            animation: fadeText 2s ease forwards;
            opacity: 0;
        }

        @keyframes fadeText {
            to { opacity: 1; }
        }

        #hiddenImage {
            display: none;
            max-width: 300px;
            border-radius: 15px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.5);
            user-select: none;
            pointer-events: none;
        }

        button.view-btn {
            background: gold;
            color: black;
            padding: 12px 25px;
            border-radius: 25px;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        button.view-btn:hover {
            background: orange;
            transform: scale(1.05);
        }

        a.btn {
            background: rgba(255, 215, 0, 0.9);
            color: black;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            margin-top: 20px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        a.btn:hover {
            background: rgba(255, 165, 0, 0.9);
            transform: scale(1.05);
        }

        .petal {
            position: absolute;
            width: 30px;
            height: 30px;
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Sakura_petal.svg/1024px-Sakura_petal.svg.png');
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.8;
            animation: fall linear infinite;
        }

        @keyframes fall {
            0% { transform: translateY(-50px) rotate(0deg); opacity: 1; }
            100% { transform: translateY(110vh) rotate(360deg); opacity: 0; }
        }
    </style>
</head>
<body>

    <h1>Hey Everyone</h1>
    <p>
        There is a girl I know, she is pretty and she is smart.  
        A little bit wicked but still a very great girl, and no words can describe how I feel.  
        Everything else I want to say is special and for her alone.  
        But I want you to see her and see how beautiful her smile is,  
        how her smile is like the sun in the daytime to me,  
        and how every response from her is a great joy to me.  
        I don't know what to do with her and what to do with myself.
    </p>

    <button class="view-btn" onclick="showImage()">View Image</button>
    <br>
    <img id="hiddenImage" src="image1.jpg" alt="Beautiful Smile" oncontextmenu="return false">

    <a href="freshpage.php" class="btn">Go Back</a>
            <a href="Login.php" class="btn">For Blessing Only</a>
    <script>
        function showImage() {
            const img = document.getElementById("hiddenImage");
            img.style.display = "block";
            setTimeout(() => {
                img.style.display = "none";
            }, 5000); // Image hides after 5 seconds
        }

        function createPetal() {
            const petal = document.createElement('div');
            petal.classList.add('petal');
            petal.style.left = Math.random() * 100 + 'vw';
            petal.style.animationDuration = (Math.random() * 5 + 5) + 's';
            document.body.appendChild(petal);
            setTimeout(() => petal.remove(), 10000);
        }
        setInterval(createPetal, 300);

        // Disable PrintScreen key (basic prevention)
        document.addEventListener('keyup', (e) => {
            if (e.key === "PrintScreen") {
                alert("Screenshots are disabled for this page.");
            }
        });
    </script>

</body>
</html>