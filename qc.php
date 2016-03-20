<?php
    include('class.pdf2text.php');
    $target_dir = "uploads/";
    //$target_file = $target_dir . basename($_FILES["uploadfile"]["tmp_name"]);
    $uploadOk = 1;
    //$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    print_r($_POST);
    if(isset($_POST['submit'])) {
      echo "if";
      $file_name = $_FILES['uploadfile']['name'];

      echo "filename" . $file_name;
      $file_extn = strtolower(end(explode('.',$_FILES['uploadfile']['name'])));
      echo "file extension" . $file_extn;

      if($file_extn == "doc" || $file_extn == "docx"){
        echo "word";
        $words = docx2text($file_name);
      }elseif($file_extn == "rtf"){
        $words = rtf2text($file_name);
      }
      elseif($file_extn == "pdf"){
        $a = new PDF2Text();
        $a->setFilename($file_name);
        $a->decodePDF();
        $words = $a->output();
      }
      echo $words;
      $wordcount = str_word_count($words, 0);
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
        }
        $zip->close();
    }

    // In case of failure return empty string
    return "";
    }
?>
