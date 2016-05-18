<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="nova.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novastella | Quote</title>


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

<body id="page-top" class="index" >
  <?php
ini_set('display_errors', 'Off');
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
                <!--<a class="navbar-brand page-scroll" href="index.html#page-top">Novastella</a>-->
                <a href="index.html#" class="pull-left"><img src="img/ns-logo2.gif" width="150px"></a>
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
                        <a onclick="ga('send', 'event', 'blog', 'click', 'Blog link click');"class="page-scroll" href="/blog">Blog</a>
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

                    $words = "";

                    if($file_extn == "docx"){
                      //echo "word";
                      $words = docx2text($file_name);
                      //$words = shell_exec("unzip " . $target_file . "word/document.xml | sed -e 's/<[^>]\{1,\}>//g; s/[^[:print:]]\{1,\}//g'");
                    }elseif($file_extn == "doc") {
                      $docObj = new DocxConversion($file_name);
                      $words = $docObj->convertToText();

                    }elseif($file_extn == "xlsx"){
                      $docObj = new DocxConversion($file_name);
                      $words = $docObj->convertToText();
                    }elseif($file_extn == "pptx"){
                      $docObj = new DocxConversion($file_name);
                      $words = $docObj->convertToText();
                    }elseif($file_extn == "rtf"){
                      $words = rtf2text($file_name);
                    }elseif($file_extn == "pdf"){
                      $a = new PDF2Text();
                      $a->setFilename($file_name);
                      $a->decodePDF();
                      $words = $a->output();
                    }
                    //echo $words;
                    $wordcount = str_word_count($words, 0);
                    $wordcount = $wordcount + $wordcount * .20;
                    $cost = ceil($wordcount * .25);
                    $wc = ceil($wordcount);
                    if ($wordcount > 0){
                      echo "<h3>Estimated Project Cost:</h3><h4>$" . $cost . "</h4>";
                      echo "<p>&nbsp;</p>";
                      echo "<h5>Estimated Word Count: " . $wc . "</h5>";
                    }elseif ($wordcount == 0) {
                      echo "<h3>Uh oh!</h3>";
                      echo "<p>Something happened. <a href='index.html#contact'>Please contact us</a>.</p>";
                    }

                  } else {
                    echo "<h3>UH Oh! Seems the file was too large. Please <a href='index.html#contact'>Contact us</a></h3>";
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


                  //!!!!!!!!!!!!!

                  class DocxConversion{
    private $filename;

    public function __construct($filePath) {
        $this->filename = $filePath;
    }

    private function read_doc() {
        $fileHandle = fopen($this->filename, "r");
        $line = @fread($fileHandle, filesize($this->filename));
        $lines = explode(chr(0x0D),$line);
        $outtext = "";
        foreach($lines as $thisline)
          {
            $pos = strpos($thisline, chr(0x00));
            if (($pos !== FALSE)||(strlen($thisline)==0))
              {
              } else {
                $outtext .= $thisline." ";
              }
          }
         $outtext = preg_replace("/[^a-zA-Z0-9\s\,\.\-\n\r\t@\/\_\(\)]/","",$outtext);
        return $outtext;
    }

    private function read_docx(){

        $striped_content = '';
        $content = '';

        $zip = zip_open($this->filename);

        if (!$zip || is_numeric($zip)) return false;

        while ($zip_entry = zip_read($zip)) {

            if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

            if (zip_entry_name($zip_entry) != "word/document.xml") continue;

            $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

            zip_entry_close($zip_entry);
        }// end while

        zip_close($zip);

        $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
        $content = str_replace('</w:r></w:p>', "\r\n", $content);
        $striped_content = strip_tags($content);

        return $striped_content;
    }

 /************************excel sheet************************************/

function xlsx_to_text($input_file){
    $xml_filename = "xl/sharedStrings.xml"; //content file name
    $zip_handle = new ZipArchive;
    $output_text = "";
    if(true === $zip_handle->open($input_file)){
        if(($xml_index = $zip_handle->locateName($xml_filename)) !== false){
            $xml_datas = $zip_handle->getFromIndex($xml_index);
            $xml_handle = DOMDocument::loadXML($xml_datas, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
            $output_text = strip_tags($xml_handle->saveXML());
        }else{
            $output_text .="";
        }
        $zip_handle->close();
    }else{
    $output_text .="";
    }
    return $output_text;
}

/*************************power point files*****************************/
function pptx_to_text($input_file){
    $zip_handle = new ZipArchive;
    $output_text = "";
    if(true === $zip_handle->open($input_file)){
        $slide_number = 1; //loop through slide files
        while(($xml_index = $zip_handle->locateName("ppt/slides/slide".$slide_number.".xml")) !== false){
            $xml_datas = $zip_handle->getFromIndex($xml_index);
            $xml_handle = DOMDocument::loadXML($xml_datas, LIBXML_NOENT | LIBXML_XINCLUDE | LIBXML_NOERROR | LIBXML_NOWARNING);
            $output_text .= strip_tags($xml_handle->saveXML());
            $slide_number++;
        }
        if($slide_number == 1){
            $output_text .="";
        }
        $zip_handle->close();
    }else{
    $output_text .="";
    }
    return $output_text;
}


    public function convertToText() {

        if(isset($this->filename) && !file_exists($this->filename)) {
            return "File Not exists";
        }

        $fileArray = pathinfo($this->filename);
        $file_ext  = $fileArray['extension'];
        if($file_ext == "doc" || $file_ext == "docx" || $file_ext == "xlsx" || $file_ext == "pptx")
        {
            if($file_ext == "doc") {
                return $this->read_doc();
            } elseif($file_ext == "docx") {
                return $this->read_docx();
            } elseif($file_ext == "xlsx") {
                return $this->xlsx_to_text();
            }elseif($file_ext == "pptx") {
                return $this->pptx_to_text();
            }
        } else {
            return "Invalid File Type";
        }
    }

}
              ?>


<p>&nbsp;</p>
<p>&nbsp;</p>

<p>*All qoutes given are estimates. To recieve a more acurate quote please <a href="index.html#contact">Contact Us</a>
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

                </div>
                <div class="col-md-4">

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
   <!-- <script src="js/cbpAnimatedHeader.js"></script>-->

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
