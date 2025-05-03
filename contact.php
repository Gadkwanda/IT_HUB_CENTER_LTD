<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It Hub Center Service page</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assest/css/main.css">
<link rel="stylesheet" type="text/css" href="new_style.css">
</head>
  <style type="text/css">
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', sans-serif;
  background-color: #f9f9f9;
  color: #333;
  padding: 20px;
}
  </style>

<body>

<?php include 'navigation.php'; ?>

<?php include 'includes\contactheadline.php'; ?>  

<div class="row">    

    <div class="column middle">
<form class="form">
    
    <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>first name</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="">
            <span>last name</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="">
        <span>email</span>
    </label> 
        
    <label>
        <input class="input" placeholder="" type="tel" required="">
        <span>contact number</span>
    </label>
    <label>
        <textarea class="input01" placeholder="" rows="3" required=""></textarea>
        <span>message</span>
    </label>
    
    <button href="#" class="fancy">
      <span class="top-key"></span>
      <span class="text1">submit</span>
      <span class="bottom-key-1"></span>
      <span class="bottom-key-2"></span>
    </button>
</form>


        </div>
    
    <div class="column side">
            <div><div style="left: 0; width: 100%; height: 140px; position: relative;">
            <iframe src="//cdn.iframe.ly/api/iframe?app=1&url=https%3A%2F%2Fweb.facebook.com%2Firadukunda.gad.923&key=925108d922be940af814f71907a7df4b" 
              style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen>
            </iframe>
              </div><a href="https://embedcodesgenerator.com" rel="noopener" target="_blank" style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;
            overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">embedcodesgenerator.com</a></div>
<br>
    <iframe style="left: 0; width: 100%; height: 200px; position: relative;"
    src="https://www.google.com/maps?q=-1.9099,30.0849&hl=en&z=15&output=embed" 
    loading="lazy" 
    allowfullscreen>
  </iframe>
  
  <?php 
include 'includes\socialmedia.php'; ?>
         
              
  </div>
</div>


    <div class="footer">
      
 <?php include 'footer.php'; ?>
    </div>
<script>
    function showTab(index) {
      const contents = document.querySelectorAll('.tab-content');
      const buttons = document.querySelectorAll('.tab-btn');

      contents.forEach((content, i) => {
        content.classList.toggle('active', i === index);
        buttons[i].classList.toggle('active', i === index);
      });
    }
  </script>

</body>
</html>
