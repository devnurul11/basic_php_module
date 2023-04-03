<?php
// In this assignment, you will create a personal blog using HTML, CSS, and PHP. Your blog should have multiple pages, including a home page, a blog page, and a contact page. Here are the requirements for the blog:

//     Homepage: Create a homepage that displays a header with a logo, navigation menu, and a featured post section with a title, image, and excerpt from the latest blog post. The navigation menu should have links to other pages on the website, including the blog page and the contact page.
    
//     Blog page: Create a blog page that displays a list of blog posts, with the most recent post at the top. Each blog post should have a title, image, excerpt, and a "Read More" button that links to the full post. Include a sidebar with a search bar and a list of categories.
    
//     Single post page: Create a single post page that displays the full blog post, including the title, image, content, and author. Include social sharing buttons to allow readers to share the post on social media.

//     Contact page: Create a contact page with a form that allows users to enter their name, email, subject, and message. When the user submits the form, the data should be sent to a PHP script that will process the data and shows a successful message.
  
//     Responsive design: Ensure that the website is responsive and looks good on all devices, including desktop, tablet, and mobile.
  
//     Submission Requirements:
  
//     Please submit the following materials for grading:
  
//     1.A GitHub repository containing all the code for your blog.
   
//     2. A written report detailing the design and implementation of your blog, including a description of any challenges you faced and how you overcame them.
    ?>
    
<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <a href="/">
          <img src="logo.png" alt="My Website Logo">
        </a>
      </div>
      <nav>
        <ul>
          <li><a href="basic_php_module/class-9/exam9/">Home</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
    <div class="post-card">
  <div class="post-image">
    <img src="event-image.jpg" alt="Event Image">
  </div>
  <div class="post-info">
    <h2>Upcoming Event</h2>
    <p><strong>Date:</strong> August 25th, 2022</p>
    <p><strong>Time:</strong> 7:00 PM - 10:00 PM</p>
    <p><strong>Location:</strong> 123 Main Street, Anytown USA</p>
    <a href="#" class="register-button">Register Now</a>
  </div>
</div>

    </main>
  </body>
</html>
