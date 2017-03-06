<# start a=b #> <!-- nostyle -->
<?                                      // shorttag
if($a) {
elseif($b)                              // no space after if
elseif ($a==$b)                         // no spaces around ==
else if ($a===$b)                       // no spaces around ===
{
    // some code
    // more code
    // more comments
    // more                             // test context wrapping
    // and even more
    if ($aa==$bb) {
        echo "fail";                    // one more == without whitespace
    }
?>