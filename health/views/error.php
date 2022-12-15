<?php
class CError {
    public function showError($error) {
        $xhtml = "";
        if(!empty($error)) {
            $xhtml .= "<div class='alert bg-warning'>";
            $xhtml .= "<ul>";
            foreach($error as $err) {
                $xhtml .= "<li style='list-style: none;'><h4>$err</h4></li>";
            }
            $xhtml .= "</div>";
            $xhtml .= "</ul>";
        }
        echo $xhtml;
    }
}

?>