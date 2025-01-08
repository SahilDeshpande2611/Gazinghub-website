<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signage Website</title>
    <style>
        body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  line-height: 1.6;
  color: #333;
  display: flex;
  justify-content: center;
  }

.container {
  max-width:800px;
  margin: 0 auto;
}


        header {
            text-align: center;
            padding: 20px;
            background: #f8f8f8;
        }

        section {
            padding: 20px;
            text-align: center;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            color: #222;
        }

        .subtitle {
            font-size: 12px;
            color: #666;
            margin: 10px 0;
            text-align: center;
        }

        .box {
            margin: 20px auto;
            background: #eaeaea;
            padding: 30px;
            border-radius: 10px;
            max-width: 100%;
          
        }

        .founder {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .founder img {
            width: 200px;
            height: 200px;
            border-radius: 10px;
            background: #333;
            margin: 10px;
        }

        .founder .text {
            max-width: 300px;
            margin: 10px;
            text-align: left;
        }

        .button {
            background: #007bff;
            color: white;
            padding: 8px 50px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
        }

        .button:hover {
            background: #0056b3;
        }

        .stories {
    display: flex; /* Use flexbox for horizontal alignment */
    gap: 20px;
    margin-top: 30px;
    overflow-x: auto; /* Enable horizontal scrolling */
    padding-bottom: 10px; /* Optional: Add space below for scroll bar */
}

.story {
    min-width: 250px; /* Ensure stories have a consistent width */
    background: #f4f4f4;
    padding: 20px;
    border-radius: 10px;
}

        .highlight {
  color: #007bff;
}
h1 {
  font-size: 2rem;
}
        @media (min-width: 768px) {
            .founder {
                flex-wrap: nowrap;
            }

            .stories {
                grid-template-columns: repeat(3, 1fr);
            }
        }
    </style>
</head>
<body>
<div class="container"> 

<header>
    <h1 class="title">Product Cycle</h1>
    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie,<br> dictum est a, mattis tellus.</p>
</header>

<section>
    <div class="box">Main Content Placeholder</div>
</section>

<section class="founder">
    <img src="placeholder.jpg" alt="Founder">
    <div class="text">
        <h1 class="title" >Meet Our <span class="highlight">Founder</span></h1>
        <p class="subtitle ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p>
        <a href="#" class="button">Learn More</a>
    </div>
</section>

<section>
   <left><h2 class="title">Catalogue</h2> </left> 
    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p>
    <div class="box">Catalogue Content Placeholder</div>
</section>

<section>
    <h2 class="title">Customer <span class="highlight">Success</span> Stories</h2>
    <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p>
    <div class="stories">
        <div class="story"><strong>Lorem Ipsum</strong>
        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p> 
        </div>
        <div class="story"><strong>Lorem Ipsum</strong>
        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p> 
      </div>
        <div class="story"><strong>Lorem Ipsum</strong>
        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p> 
      </div>
      <div class="story"><strong>Lorem Ipsum</strong>
        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p> 
      </div>
      <div class="story"><strong>Lorem Ipsum</strong>
        <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus.</p> 
      </div>
    </div>
</section>
</div>

</body>
</html>