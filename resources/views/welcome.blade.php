<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justin Ducusin - Web Design Portfolio</title>
    <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    color: #333;
}
header {
    background-color: #101010;
    color: #fff;
    padding: 10px 0;
    text-align: center;
    background-image: url="('1/crampled_paper.png')";
    background-size: cover;

    
}
.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}
.profile {
    text-align: center;
    margin: 20px 0;
}
.profile img {
    width: 150px;
    border-radius: 10%;
}
.profile h1 {
    margin: 10px 0;
}
.projects {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    background-image: url="('1/crampled_paper.png')";
}
.project {
    background: #fff;
    margin: 20px;
    padding: 20px;
    width: 30%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.project img {
    width: 100%;
}
.project h3 {
    margin-top: 10px;
}
footer {
    background-color: #101010;
    color: #fff;
    text-align: center;
    padding: 10px 0;
    margin-top: 20px;
}
   </style>
</head>
<body>
    <header>
        <h1>DUCUSIN, Justin A.</h1>
        <p>Web developer and Graphics artist</p>
    </header>
    <div class="container">
        <div class="profile">
            <img src="{{ asset ('1/436618932_904269594721793_2684501457786296374_n.jpg')}}" alt="Justin Ducusin">
            <h1>Justin Ducusin</h1>
            <p>Hello! I'm Justin Ducusin, a skilled Web Developer and Graphic Artist with 1 year of experience, specializing in creating visually stunning and highly functional websites. My expertise spans HTML, CSS, JavaScript, and various frameworks, as well as proficiency in Adobe Photoshop, Illustrator, and Figma for compelling graphic design. I am passionate about blending creativity with technology to deliver engaging digital experiences that captivate and inspire.</p>
        </div>
        <section class="projects">
            <div class="project">
                <img src="{{ asset ('1/21_years_Old.png')}}" alt="Project Uno">
                <h3>Birthday Poster</h3>
                <p>This poster was made to celebrate my birthday this year.</p>
            </div>
            <div class="project">
                <img src="1/sk_kagawad_poster1.png" alt="Project Dos">
                <h3>SK Election</h3>
                <p>This poster was inspired from the last elections for SK Chairmans of barangays. I created this to challenge myself with different types of posters.</p>
            </div>
            <div class="project">
                <img src="1/SIGNING_IN_myself.png" alt="Project Tres">
                <h3>Announcement Poster</h3>
                <p>This poster was a challenge for myself to try and make one in a different approach and to see how far my creativity can go.</p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 DUCUSIN, JUSTIN A.</p>
    </footer>
</body>
</html>
