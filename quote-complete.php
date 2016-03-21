<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Novastella</title>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
      if (window.File && window.FileReader && window.FileList && window.Blob) {
        // Great success! All the File APIs are supported.
        } else {
          $("quote-box").html("<p> Your browser does not support this function. Enter the word count directly or simply contact us :)</p>");
        }
    </script>

</head>

<body id="page-top" class="index navbar-fixed-top">
  <?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html#page-top">Novastella</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#services">Services</a>
                    </li>
                    <!--<li>
                        <a class="page-scroll" href="index.html#portfolio">Portfolio</a>
                    </li>-->
                    <li>
                        <a class="page-scroll" href="index.html#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">Contact</a>
                    </li>
					<li>
                        <a class="page-scroll" href="quote.php">Quote</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!-- Quote Section -->
    <section id="quote" class="quotesection">
        <div class="container">
		<div class="well ">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">FREE QUOTE</h2>

                </div>
            </div>
            <div class="row text-center">
              <?php
                  include('class.pdf2text.php');
                  $target_dir = "uploads/";
                  $target_file = "/tmp/" . basename($_FILES["uploadfile"]["name"]);
                  $uploadOk = 1;
                  //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                  // Check if image file is a actual image or fake image
                  //print_r($_POST);
                  //print_r($_FILES);
                  if(isset($_POST["submit"])) {

                    $file_name =  $_FILES["uploadfile"]['tmp_name'];
                    //echo "<br><br>" . $file_name . "<br><br>";

                    //echo "filename" . $file_name;
                    //$file_extn = strtolower(end(explode('.',$_FILES['uploadfile']['name'])));
                    $tmp = explode('.', $_FILES["uploadfile"]['name']);
                    $file_ex = end($tmp);
                    $file_extn = strtolower($file_ex);

                    //echo "file extension" . $file_extn;

                    if($file_extn == "doc" || $file_extn == "docx"){
                      //echo "word";
                      $words = docx2text($file_name);
                      //$words = shell_exec("unzip " . $target_file . "word/document.xml | sed -e 's/<[^>]\{1,\}>//g; s/[^[:print:]]\{1,\}//g'");
                    }elseif($file_extn == "rtf"){
                      $words = rtf2text($file_name);
                    }
                    elseif($file_extn == "pdf"){
                      $a = new PDF2Text();
                      $a->setFilename($file_name);
                      $a->decodePDF();
                      $words = $a->output();
                    }
                    //echo $words;
                    $wordcount = str_word_count($words, 0);
                    $wordcount = $wordcount + $wordcount * .15;
                    echo $wordcount;

                  } else {
                    echo "oh no";
                  }


                  function docx2text($filename) {
                     return readZippedXML($filename, "word/document.xml");
                   }

                  function readZippedXML($archiveFile, $dataFile) {
                  // Create new ZIP archive
                  $zip = new ZipArchive;
                  //echo "\nIn read zipped: " . $archiveFile . "\n";
                  // Open received archive file
                  if (true === $zip->open($archiveFile)) {
                      // If done, search for the data file in the archive
                      if (($index = $zip->locateName($dataFile)) !== false) {
                          // If found, read it to the string
                          $data = $zip->getFromIndex($index);
                          // Close archive file
                          $zip->close();
                          // Load XML from a string
                          // Skip errors and warnings
                          $xml = new DOMDocument();
                      $xml->loadXML($data, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
                          // Return data without XML formatting tags
                          return strip_tags($xml->saveXML());
                          //return $xml->saveXML();
                      }
                      $zip->close();
                  }

                  // In case of failure return empty string
                  return "";
                  }
              ?>




</div>



            </div>
        </div>
    </section>
	<!-- Word count modal -->








    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Novastella 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
						<li><a href="index.html#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

	<script>
		counter = function() {
		var value = $('#text').val();

		if (value.length == 0) {
			$('#wordCount').html(0);
			return;
		}

		var regex = /\s+/gi;
		var wordCount = value.trim().replace(regex, ' ').split(' ').length;

		$('#wordCount').html(wordCount);
		$('#wordcountform').val(wordCount);

		};

		$(document).ready(function() {
			$('#count').click(counter);
		});
	</script>

</body>

</html>
