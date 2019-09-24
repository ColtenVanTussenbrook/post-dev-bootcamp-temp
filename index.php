<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Post Dev Bootcamp</title>
  <meta name="description" content="Post Dev Bootcamp">
  <meta name="author" content="PostDevBootcamp">

  <link rel="stylesheet" href="css/style.css?v=1.0">

  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Noto+Sans+TC&display=swap" rel="stylesheet">

</head>

<body>
  <div class="header">
      <h1>{ POST } Dev Bootcamp</h1>
  </div>
  <div class="content">
    <p>
        Coding bootcamps are a great way to get started as a developer. However, with so many
        different schools now, there's no shortage of junior developers looking for their first
        real dev job.
    </p>
    <p>
        I created POST DEV BOOTCAMP to be a place where recent dev bootcamp grads could make a profile,
        continue learning, and have a path <i>after</i> their initial course.
    </p>
    <p>
        This is a brand new project and will be launched in the next few months. If you'd like to be notified
        of the official launch and get access to all the content for FREE, enter your email here:
    </p>
  </div>
  <div class="email-form">
    <form action="<?php echo htmlspecialchars("signup.php");?>" method="post">
        <span class="form-text">Name:</span> <input type="text" name="name" maxlength="20"><br>
        <span class="form-text">E-mail:</span> <input type="text" name="email" maxlength="30"><br>
        <input type="submit" class="submit-btn">
    </form>
  </div>
  
</body>
</html>