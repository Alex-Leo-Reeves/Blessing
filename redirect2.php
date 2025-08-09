<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: Login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome Beautiful Blessing</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background: linear-gradient(to right, #4facfe, #00f2fe);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
        color: white;
    }
    h1 {
        margin-top: 30px;
        font-size: 2rem;
        text-align: center;
    }
    p {
        font-size: 1.2rem;
        text-align: center;
    }
    .logout-btn {
        margin-top: 20px;
        background: red;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        cursor: pointer;
        font-size: 16px;
        font-weight: bold;
        z-index: 3;
    }
    .logout-btn:hover {
        background: darkred;
    }
    .hearts {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        overflow: hidden;
        z-index: 0;
    }
    .heart {
        position: absolute;
        color: rgba(255, 0, 76, 0.7);
        font-size: 24px;
        animation: floatUp 6s linear infinite;
    }
    @keyframes floatUp {
        0% { transform: translateY(100vh) scale(1); opacity: 1; }
        100% { transform: translateY(-10vh) scale(1.5); opacity: 0; }
    }
    .envelope {
        width: 300px;
        height: 200px;
        position: relative;
        cursor: pointer;
        perspective: 800px;
        animation: pulse 1.5s infinite ease-in-out;
        z-index: 2;
        margin-top: 40px;
    }
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }
    .flap {
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 0;
        border-left: 150px solid transparent;
        border-right: 150px solid transparent;
        border-bottom: 100px solid #f50057;
        z-index: 2;
        transform-origin: top;
        transition: transform 1s ease-in-out;
    }
    .body {
        position: absolute;
        top: 100px;
        left: 0;
        width: 300px;
        height: 100px;
        background: #ff4081;
        z-index: 1;
    }
    .message {
        max-width: 600px;
        background: white;
        color: black;
        padding: 20px;
        margin-top: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
        font-size: 1rem;
        line-height: 1.5;
        white-space: pre-wrap;
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.8s ease, transform 0.8s ease;
        display: none;
        z-index: 2;
    }
    .video-links {
        margin-top: 15px;
        opacity: 0;
        transition: opacity 1s ease;
        display: none;
        z-index: 2;
    }
    .video-links a {
        display: inline-block;
        background: #ff4081;
        color: white;
        text-decoration: none;
        padding: 10px 15px;
        margin: 5px;
        border-radius: 8px;
        font-weight: bold;
        transition: background 0.3s ease;
    }
    .video-links a:hover {
        background: #f50057;
    }
    .pulse-link {
        color: yellow;
        font-weight: bold;
        text-decoration: underline;
        animation: glowPulse 1.5s infinite;
        background: none !important;
        padding: 0 !important;
        margin-top: 15px;
        display: inline-block;
    }
    @keyframes glowPulse {
        0% { text-shadow: 0 0 5px yellow; }
        50% { text-shadow: 0 0 20px yellow; }
        100% { text-shadow: 0 0 5px yellow; }
    }
    .open { animation: none; }
    .open .flap { transform: rotateX(-180deg); }
    .show-message {
        display: block !important;
        opacity: 1 !important;
        transform: translateY(0) !important;
    }
    .show-videos {
        display: block !important;
        opacity: 1 !important;
    }
</style>
</head>
<body>

<h1>Welcome beautiful Blessing, <?php echo $_SESSION['Oghale']; ?>!</h1>
<p>You have successfully logged in.</p>

<form action="logout.php" method="POST">
    <button type="submit" class="logout-btn">Logout</button>
</form>

<div class="hearts" id="heartsContainer"></div>

<div class="envelope" id="envelope" onclick="openMessage()">
    <div class="flap"></div>
    <div class="body"></div>
</div>

<div class="message" id="loveMessage">
Hey Blessing I know all this might be crazy but I wanted to do it 
I remember the first day we talked on tiktok after I watched your video in your red gown it made my heart so happy so I sent you a message and from there we started talking 
It was a very happy moment for me Oghale 
Two days after your birthday
I remember when I first met you, I was so very happy and scared but I felt so at ease with you that I just wanted to be very close to you like you'll be my comfort but you were too shy and kept on trying to create space between us but I kept on coming back to you and when I introduced you to my friends and when I got angry at one for trying to collect your phone 
Every memory of you is a cherished memory to me because I do not see you all the time 
I have seen you 6 times 
The first time was when we met 
The second time was when I saw you at coke villa
The third time was when I saw you secretly 
The fourth time was when I saw you running at 250
The fifth was when we arranged to meet up 
The sixth was when I saw you leaving class oh and the seventh was when I saw you going to the hostel from class swinging your bag as usual 
You're pretty that I could watch your video and smile all day 
You're so pretty that seeing you makes my heart tremble
You're so pretty that my hands shake in fear
Oh I don't know what to do with you Blessing 
I can only wish I could call you mine, I really do 
A wish is just a wish 
Anyone I'll keep on trying to learn more about you but I already a few things about you Oghale
I love the way you always say dohhh to me, it is my favorite word because of you 
You can make anything my favorite
Just as how you made yourself my favorite unknowingly 
I want you to be free with me Blessing like I'm your twin and to tell me everything going on in your life 
I want to hear it all no matter how small or tiny it is to me my interest is great that anything from you is important to me 
This is starting to sound like a love letter, I wanted to write and compliment you and say you're nice but you're notttt Blessing well a little bit but just tiny 
Anyway I hope you'll always be happy and try to lean on me if it is possible 
Thank you for read this Blessing
You're the best
</div>

<div class="video-links" id="videoLinks">
    <a href="video1.MOV" download>Watch Video 1</a>
    <a href="video2.MOV" download>Watch Video 2</a>
    <br><br>
    <a href="#" id="whatsappLink" class="pulse-link">
        What do you think about this message
    </a>
</div>

<script>
function openMessage() {
    const envelope = document.getElementById("envelope");
    envelope.classList.add("open");
    setTimeout(() => {
        document.getElementById("loveMessage").classList.add("show-message");
        document.getElementById("videoLinks").classList.add("show-videos");
        startHearts();
    }, 1000);
}
function startHearts() {
    const container = document.getElementById("heartsContainer");
    setInterval(() => {
        const heart = document.createElement("div");
        heart.classList.add("heart");
        heart.textContent = "❤️";
        heart.style.left = Math.random() * 100 + "vw";
        heart.style.fontSize = Math.random() * 20 + 20 + "px";
        heart.style.animationDuration = (Math.random() * 3 + 3) + "s";
        container.appendChild(heart);
        setTimeout(() => {
            heart.remove();
        }, 6000);
    }, 500);
}
document.getElementById("whatsappLink").addEventListener("click", function(event) {
    event.preventDefault();
    let waUrl = "https://wa.link/r4wa4c";
    if (/Android|iPhone|iPad|iPod/i.test(navigator.userAgent)) {
        waUrl = "whatsapp://send?text=Hey!%20Check%20this%20out:%20https://wa.link/r4wa4c";
    }
    window.open(waUrl, "_blank");
});
</script>

</body>
</html>