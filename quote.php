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
                <!--<a class="navbar-brand page-scroll" href="index.html#page-top">Novastella</a>-->
                <a href="#" class="pull-left"><img src="img/ns-logo2.gif" width="150px"></a>
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
                        <a class="page-scroll" href="index.html#contact">Contact</a>
                    </li>
					<li class="active">
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
                    <h2 class="section-heading">GET A FREE QUOTE</h2>
                    <h3 class="section-subheading text-muted">Use the form below to get a quick free quote. If you have any questions or have a large project, please contact us.</h3>
                </div>
            </div>
            <div class="row text-center">




                <form role="form" class="form-horizontal" action="quote-complete.php" method="POST" enctype="multipart/form-data"/ >
					<fieldset>



					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="wordcountform">File</label>
					  <div class="col-md-4">
					  <input  name="uploadfile" type="file"  class=" input-md"  >
            <p>*Allowed file types doc, docx, pdf</p>

					  </div>
					</div>



					<p></p>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="type">Type of Translation</label>
					  <div class="col-md-4">
					  <div class="radio">
						<label for="type-0">
						  <input type="radio" name="type" id="type-0" value="Translation" checked="checked">
						  Translation
						</label>
						</div>
					  <div class="radio">
						<label for="type-1">
						  <input type="radio" name="type" id="type-1" value="Transcripts/Subtitles">
						  Transcripts/Subtitles
						</label>
						</div>
					  <div class="radio">
						<label for="type-2">
						  <input type="radio" name="type" id="type-2" value="Proof Reading">
						  Proof Reading
						</label>
						</div>
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="SourceLanguage">SourceLanguage</label>
					  <div class="col-md-4">
						<select id="SourceLanguage" name="SourceLanguage" class="form-control">
						  <option value="English">English</option>
						  <option value="Mandarin">Mandarin</option>
						  <option value="Spanish">Spanish</option>

						  <option value="Hindi">Hindi</option>
						  <option value="Arabic">Arabic</option>
						  <option value="Portuguese">Portuguese</option>
						  <option value="Bengali">Bengali</option>
						  <option value="Russian">Russian</option>
						  <option value="Japanese">Japanese</option>
						  <option value="Punjabi">Punjabi</option>
						  <option value="German">German</option>
						  <option value="Javanese">Javanese</option>
						  <option value="Wu&nbsp;(Shanghainese)">Wu&nbsp;(Shanghainese)</option>
						  <option value="Malay/Indonesian">Malay/Indonesian</option>
						  <option value="Telugu">Telugu</option>
						  <option value="Vietnamese">Vietnamese</option>
						  <option value="Korean">Korean</option>
						  <option value="French">French</option>
						  <option value="Marathi">Marathi</option>
						  <option value="Tamil">Tamil</option>
						  <option value="Urdu">Urdu</option>
						  <option value="Turkish">Turkish</option>
						  <option value="Italian">Italian</option>
						  <option value="Yue&nbsp;(Cantonese)">Yue&nbsp;(Cantonese)</option>
						  <option value="Thai">Thai</option>
						  <option value="Gujarati">Gujarati</option>
						  <option value="Jin">Jin</option>
						  <option value="Southern Min">Southern Min</option>
						  <option value="Persian">Persian</option>
						  <option value="Polish">Polish</option>
						  <option value="Pashto">Pashto</option>
						  <option value="Kannada">Kannada</option>
						  <option value="Xiang&nbsp;(Hunnanese)">Xiang&nbsp;(Hunnanese)</option>
						  <option value="Malayalam">Malayalam</option>
						  <option value="Sundanese">Sundanese</option>
						  <option value="Hausa">Hausa</option>
						  <option value="Odia&nbsp;(Oriya)">Odia&nbsp;(Oriya)</option>
						  <option value="Burmese">Burmese</option>
						  <option value="Hakka">Hakka</option>
						  <option value="Ukrainian">Ukrainian</option>
						  <option value="Bhojpuri">Bhojpuri</option>
						  <option value="Tagalog">Tagalog</option>
						  <option value="Yoruba">Yoruba</option>
						  <option value="Maithili">Maithili</option>
						  <option value="Uzbek">Uzbek</option>
						  <option value="Sindhi">Sindhi</option>
						  <option value="Amharic">Amharic</option>
						  <option value="Fula">Fula</option>
						  <option value="Romanian">Romanian</option>
						  <option value="Oromo">Oromo</option>
						  <option value="Igbo">Igbo</option>
						  <option value="Azerbaijani">Azerbaijani</option>
						  <option value="Awadhi">Awadhi</option>
						  <option value="Gan Chinese">Gan Chinese</option>
						  <option value="Cebuano&nbsp;(Visayan)">Cebuano&nbsp;(Visayan)</option>
						  <option value="Dutch">Dutch</option>
						  <option value="Kurdish">Kurdish</option>
						  <option value="Serbo-Croatian">Serbo-Croatian</option>
						  <option value="Malagasy">Malagasy</option>
						  <option value="Saraiki">Saraiki</option>
						  <option value="Nepali">Nepali</option>
						  <option value="Sinhalese">Sinhalese</option>
						  <option value="Chittagonian">Chittagonian</option>
						  <option value="Zhuang">Zhuang</option>
						  <option value="Khmer">Khmer</option>
						  <option value="Turkmen">Turkmen</option>
						  <option value="Assamese">Assamese</option>
						  <option value="Madurese">Madurese</option>
						  <option value="Somali">Somali</option>
						  <option value="Marwari">Marwari</option>
						  <option value="Magahi">Magahi</option>
						  <option value="Haryanvi">Haryanvi</option>
						  <option value="Hungarian">Hungarian</option>
						  <option value="Chhattisgarhi">Chhattisgarhi</option>
						  <option value="Greek">Greek</option>
						  <option value="Chewa">Chewa</option>
						  <option value="Deccan">Deccan</option>
						  <option value="Akan">Akan</option>
						  <option value="Kazakh">Kazakh</option>
						  <option value="Northern Min">Northern Min</option>
						  <option value="Sylheti">Sylheti</option>
						  <option value="Zulu">Zulu</option>
						  <option value="Czech">Czech</option>
						  <option value="Kinyarwanda">Kinyarwanda</option>
						  <option value="Dhundhari">Dhundhari</option>
						  <option value="Haitian Creole">Haitian Creole</option>
						  <option value="Eastern Min">Eastern Min</option>
						  <option value="Ilocano">Ilocano</option>
						  <option value="Quechua">Quechua</option>
						  <option value="Kirundi">Kirundi</option>
						  <option value="Swedish">Swedish</option>
						  <option value="Hmong">Hmong</option>
						  <option value="Shona">Shona</option>
						  <option value="Uyghur">Uyghur</option>
						  <option value="Hiligaynon">Hiligaynon</option>
						  <option value="Mossi">Mossi</option>
						  <option value="Xhosa">Xhosa</option>
						  <option value="Belarusian">Belarusian</option>
						  <option value="Balochi">Balochi</option>
						  <option value="Konkani">Konkani</option>
						</select>
					  </div>
					</div>

					<!-- Select Multiple -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="languages">Target Languages</label>
					  <div class="col-md-4">
						<select id="languages" name="languages" class="form-control" multiple="multiple">
						  <option value="Spanish">Spanish</option>
						  <option value="Mandarin">Mandarin</option>

						  <option value="English">English</option>
						  <option value="Hindi">Hindi</option>
						  <option value="Arabic">Arabic</option>
						  <option value="Portuguese">Portuguese</option>
						  <option value="Bengali">Bengali</option>
						  <option value="Russian">Russian</option>
						  <option value="Japanese">Japanese</option>
						  <option value="Punjabi">Punjabi</option>
						  <option value="German">German</option>
						  <option value="Javanese">Javanese</option>
						  <option value="Wu&nbsp;(Shanghainese)">Wu&nbsp;(Shanghainese)</option>
						  <option value="Malay/Indonesian">Malay/Indonesian</option>
						  <option value="Telugu">Telugu</option>
						  <option value="Vietnamese">Vietnamese</option>
						  <option value="Korean">Korean</option>
						  <option value="French">French</option>
						  <option value="Marathi">Marathi</option>
						  <option value="Tamil">Tamil</option>
						  <option value="Urdu">Urdu</option>
						  <option value="Turkish">Turkish</option>
						  <option value="Italian">Italian</option>
						  <option value="Yue&nbsp;(Cantonese)">Yue&nbsp;(Cantonese)</option>
						  <option value="Thai">Thai</option>
						  <option value="Gujarati">Gujarati</option>
						  <option value="Jin">Jin</option>
						  <option value="Southern Min">Southern Min</option>
						  <option value="Persian">Persian</option>
						  <option value="Polish">Polish</option>
						  <option value="Pashto">Pashto</option>
						  <option value="Kannada">Kannada</option>
						  <option value="Xiang&nbsp;(Hunnanese)">Xiang&nbsp;(Hunnanese)</option>
						  <option value="Malayalam">Malayalam</option>
						  <option value="Sundanese">Sundanese</option>
						  <option value="Hausa">Hausa</option>
						  <option value="Odia&nbsp;(Oriya)">Odia&nbsp;(Oriya)</option>
						  <option value="Burmese">Burmese</option>
						  <option value="Hakka">Hakka</option>
						  <option value="Ukrainian">Ukrainian</option>
						  <option value="Bhojpuri">Bhojpuri</option>
						  <option value="Tagalog">Tagalog</option>
						  <option value="Yoruba">Yoruba</option>
						  <option value="Maithili">Maithili</option>
						  <option value="Uzbek">Uzbek</option>
						  <option value="Sindhi">Sindhi</option>
						  <option value="Amharic">Amharic</option>
						  <option value="Fula">Fula</option>
						  <option value="Romanian">Romanian</option>
						  <option value="Oromo">Oromo</option>
						  <option value="Igbo">Igbo</option>
						  <option value="Azerbaijani">Azerbaijani</option>
						  <option value="Awadhi">Awadhi</option>
						  <option value="Gan Chinese">Gan Chinese</option>
						  <option value="Cebuano&nbsp;(Visayan)">Cebuano&nbsp;(Visayan)</option>
						  <option value="Dutch">Dutch</option>
						  <option value="Kurdish">Kurdish</option>
						  <option value="Serbo-Croatian">Serbo-Croatian</option>
						  <option value="Malagasy">Malagasy</option>
						  <option value="Saraiki">Saraiki</option>
						  <option value="Nepali">Nepali</option>
						  <option value="Sinhalese">Sinhalese</option>
						  <option value="Chittagonian">Chittagonian</option>
						  <option value="Zhuang">Zhuang</option>
						  <option value="Khmer">Khmer</option>
						  <option value="Turkmen">Turkmen</option>
						  <option value="Assamese">Assamese</option>
						  <option value="Madurese">Madurese</option>
						  <option value="Somali">Somali</option>
						  <option value="Marwari">Marwari</option>
						  <option value="Magahi">Magahi</option>
						  <option value="Haryanvi">Haryanvi</option>
						  <option value="Hungarian">Hungarian</option>
						  <option value="Chhattisgarhi">Chhattisgarhi</option>
						  <option value="Greek">Greek</option>
						  <option value="Chewa">Chewa</option>
						  <option value="Deccan">Deccan</option>
						  <option value="Akan">Akan</option>
						  <option value="Kazakh">Kazakh</option>
						  <option value="Northern Min">Northern Min</option>
						  <option value="Sylheti">Sylheti</option>
						  <option value="Zulu">Zulu</option>
						  <option value="Czech">Czech</option>
						  <option value="Kinyarwanda">Kinyarwanda</option>
						  <option value="Dhundhari">Dhundhari</option>
						  <option value="Haitian Creole">Haitian Creole</option>
						  <option value="Eastern Min">Eastern Min</option>
						  <option value="Ilocano">Ilocano</option>
						  <option value="Quechua">Quechua</option>
						  <option value="Kirundi">Kirundi</option>
						  <option value="Swedish">Swedish</option>
						  <option value="Hmong">Hmong</option>
						  <option value="Shona">Shona</option>
						  <option value="Uyghur">Uyghur</option>
						  <option value="Hiligaynon">Hiligaynon</option>
						  <option value="Mossi">Mossi</option>
						  <option value="Xhosa">Xhosa</option>
						  <option value="Belarusian">Belarusian</option>
						  <option value="Balochi">Balochi</option>
						  <option value="Konkani">Konkani</option>
						</select>
					  </div>
					</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Submit</label>
  <div class="col-md-4">
    <input id="submit" name="submit" type="submit" class="btn btn-success" value="Get Quote" />
  </div>
</div>

</fieldset>
</form>
</div>



            </div>
        </div>
    </section>
	<!-- Word count modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Word count</h4>
		  </div>
		  <div class="modal-body quote-box">
			<p>Upload the file below to get the word count.</p>

			<div class="form-group">
				<label for="comment">Text:</label>

        <input class="form-control" type="file" id="files" name="files[]" />
			</div>
			<button class="btn btn-success" id="count">Count</button>
			<p>Words: <span id="list"></span></p>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		  </div>
		</div>

	  </div>
	</div>
	<!-- end word count modal -->







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
