<?php require_once('phpimage.php');
	header("Content-Type: text/html; charset=charset=utf-8");
	error_reporting(0);
	
	
	
	mysql_select_db($database_phpimage, $phpimage);
	$qur = "select * from project_posts WHERE category='Картинки' order by post_id DESC";
	mysql_query("SET CHARACTER SET utf8");
	mysql_query("SET NAMES utf8");
	$res = mysql_query($qur, $phpimage);
	$r2s = mysql_query($qur, $phpimage);
	
?>



<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" />

		<style type="text/css">

			body{
				background: url('city.jpg') no-repeat center center fixed; 
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
			}

			#contentHolder{
				width:70%;
				min-height:135%;
				background: white;
				margin-left: auto;
				margin-right: auto;
				margin-bottom: 30px;
				border: 2px solid #E64946;
				margin-top: 20px;
			}

			.postsContainer{
				width: 60%;
				text-align: center;
				border-right: 2px solid black;
				display: inline-block;
			}

			.postPicture{
				width: 95%;
			}

			.picture{
				width: 90%;
			}

			.postTitle, .followUsOn{
				margin-left: 10px;
				width: 95%;
				border-bottom: 2px solid red;
				font-size: 26px;
				font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
				text-align: left;
			}

			.postInfo{
				font-size: 20px;
				font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
				text-align: right;
			}

			.postInfo span{
				color: red;
			}

			header{
				width: 70%;
				margin-right: auto;
				margin-left: auto;
				background: #E64946;
			}

			table{
				width: 100%;
				border: none;
				margin: 0px;
				padding: 0px;
			}

			table td{
				height: 100%;
				width: 15%;
				background: #302D2C;
				color: white;
				font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
				text-align: center;
				font-size: 17px;
				padding: 10px;
			}


			table td:hover{
				background: #E64946;
				cursor: pointer;
			}

			aside{
				width: 27%;
				min-height: 100%;
				display: inline-block;
				
				position: absolute;
			}

			.socialNetworks, .aboutUs{
				width: 100%;
				height: 15%;

			}

			.socialIcons{
				width: 100%;
				text-align: center;
			}

			.social{
				width: 35px;
				margin-left: 10px;
			}

			.social:hover{
				cursor: pointer;
			}

			#forUs{
				font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
				text-align: center;
				font-size: 17px;
				margin-left: 10px;
			}

			.headLogo{
				width: 20%;
				margin-left: 20px;
			}

		</style>

	</head>
	<body>		
		<header>
			<table>

				<tr> <img src="codeBurner.png" class="headLogo"/> </tr>

				<tr id="nav">
					<td onclick="location.href='index.php'">Начало</td>					
					<td onclick="location.href='pictures.php'">Картинки</td>
					<td onclick="location.href='jokes.php'">Вицове</td>
					<td onclick="location.href='videos.php'">Клипчета</td>
					<td onclick="location.href='team.php'">Тийм билдинг</td>
					<td onclick="location.href='events.php'">Събития</td>
					<td onclick="location.href='about.php'">За нас</td>
				</tr>
			</table>
		</header>
		
		<div id="contentHolder">
			<div class="postsContainer">

				<?php while($row=mysql_fetch_array($res)) { ?>
					<div class="postPicture">
						<h1 class="postTitle"><?php echo $row['title'] ?></h1>
						<img src="<?php echo $row['image'] ?>" class="picture"/>
						<div style="display:inline-block; margin-top:-8px;" class="rw-ui-container rw-urid-<?php
						    echo  $row['post_id'] 
						?>"></div>
						<p class="postInfo" style="display:inline-block;"> От: <span><?php echo $row['date'] ?></span> &nbsp;&nbsp;&nbsp; Автор: <span><?php echo $row['autor'] ?></span> </p>
					</div>
				<?php } ?>



				<div class="postPicture">
					<h1 class="postTitle">You are the... </h1>
					<img src="shirt.jpg" class="picture"/>
					<p class="postInfo"> От: <span>15.05.2014</span> &nbsp;&nbsp;&nbsp; Автор: <span>Камелия</span> </p>
				</div>

				<div class="postPicture">
					<h1 class="postTitle">They just dont give it to me...</h1>
					<img src="mug.jpg" class="picture"/>
					<p class="postInfo"> От: <span>05.05.2014</span> &nbsp;&nbsp;&nbsp; Автор: <span>Zornitza</span> </p>
				</div>

				<div class="postPicture">
					<h1 class="postTitle">$26.99 for a watermelon? </h1>
					<img src="post.jpg" class="picture"/>
					<p class="postInfo"> От: <span>29.10.2014</span> &nbsp;&nbsp;&nbsp; Автор: <span>Y. Ivanov</span> </p>
				</div>

				<div class="postPicture">
					<h1 class="postTitle">$26.99 for a watermelon? </h1>
					<img src="cssawesome.jpg" class="picture"/>
					<p class="postInfo"> От: <span>09.11.2014</span> &nbsp;&nbsp;&nbsp; Автор: <span>Petur</span> </p>
				</div>
			</div>		

			<aside>


				<div class="aboutUs">
					<h1 class="followUsOn">За нас:</h1>

					<p id="forUs">
						Нашата мисия е да направим хората, които обучаваме, истински професионалисти в софтуерната индустрия и да им съдействаме в намирането на работа.Нашата мисия е да направим хората, които обучаваме, истински професионалисти в софтуерната индустрия и да им съдействаме в намирането на работа.
					</p>				
				</div>

				<div class="socialNetworks">
					<h1 class="followUsOn">Последвайте ни и на:</h1>

					<div class="socialIcons">
						<img class="social" src="social/fb.png" />
						<img class="social" src="social/git.png" />
						<img class="social" src="social/twitter.png" />
						<img class="social" src="social/instagram.png" />
						<img class="social" src="social/linkedin.png" />
						<img class="social" src="social/skype.png" />
					</div>					
				</div>

			</aside>
		</div>



		<script type="text/javascript">(function(d, t, e, m){
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
        RW.init({
            huid: "177384",
            uid: "967593d6515266f9fb13b84c74b809d5",
            source: "website",
            options: {
                "urid": "17",
                "size": "medium",
                "type": "nero",
                "style": "thumbs"
            } 
        });
        RW.render();
    };

    // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = (-1 < l.search.indexOf("DBG=") ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
}(document, new Date(), "script", "rating-widget.com/"));</script>

	</body>
</html>