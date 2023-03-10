<!DOCTYPE HTML>
<html>

<head>
  <title>YummyBite-Admin</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="/style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="index.html"><span class="logo_colour"><font color="#000000">Yummy</font>Bite</span></a></h1>
          <h2>Dashboard</h2>
        </div>
      </div>
	

    </div>
    <div id="site_content">
        <div id="content">
          <h5>Add Recipe</h5>
          
        <form method="post" action="" enctype='multipart/form-data' id="yummyform">
        <div class="form-group">
                <label>Recipe Name <span>*</span></label>
                <input type="text" name="recipeName" class="form-control" value="">
            </div>    
            <div class="form-group">
                <label>Ready In (minutes) <span>*</span></label>
                <input type="number" name="readyIn" class="form-control" value="">
            </div>

            <div class="form-group">
                <label>is healthy <span>*</span></label>
                <select name="isHealthy">
                  <option value="">--- Choose an option ---</option>
                  <option value="1">Yes</option>
                  <option value="">No</option>
                </select>
            </div>

            <label>ingredients (separated by a comma) <span>*</span></label>
            <textarea rows="4" cols="50" name="ingredients"></textarea>
            <label>Notes <span>*</span></label>
            <textarea rows="4" cols="50" name="notes"></textarea>
            
            <input type='file' name='file' />
          <div style="display:flex; flex-direction: row;">
            <input type='submit' class="clickable" value='Add Recipe' name='addRecipe'>
            <input type='reset' class="clickable" value='Reset'>
            </div>
        </form>
        </div>
    </div>
   
   <div id="footer"> Krijuar nga :&nbsp; Elza Krasniqi  & Argjenta ??aka &nbsp;<p><a href="www.facebook.com">CEO</a></p></div>
  </div>
</body>
</html>
