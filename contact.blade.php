<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Contact Us</title>  
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your CSS file -->  
</head>  
<body>  
    <div class="container">  
        <h1>Contact Us</h1>  
        <p>If you have any questions or would like to get in touch, please fill out the form below or reach us via the contact information provided.</p>  
        
        <form action="/contact" method="post">  
            @csrf  
            <div>  
                <label for="name">Name:</label>  
                <input type="text" id="name" name="name" required>  
            </div>  
            <div>  
                <label for="email">Email:</label>  
                <input type="email" id="email" name="email" required>  
            </div>  
            <div>  
                <label for="message">Message:</label>  
                <textarea id="message" name="message" required></textarea>  
            </div>  
            <button type="submit">Send Message</button>  
        </form>  
    </div>  
</body>  
</html>