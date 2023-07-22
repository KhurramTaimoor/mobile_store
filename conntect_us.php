<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Contact Us</h1>
    <form onsubmit="submitForm(); return false;">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="comments">Comments:</label>
        <textarea id="comments" name="comments" required></textarea>

        <button type="submit">Submit</button>
    </form>
<<script>
<script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/js/swal.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
	  </script>
	  </body>
	  </html>
