<?
return [
    array(
        "CONDITION"	=>	"#^/test/([0-9]+).html#",
        "RULE"	=>	"id=$1",
        "PATH"	=>	"/test/page.php",
    ),

    array(
        "CONDITION"	=>	"#^/test/([-_a-z0-9]+).([0-9]+).html#",
        "RULE"	=>	"code=$1&id=$2",
        "PATH"	=>	"/test/page.php",
    ),

    array(
        "CONDITION"	=>	"#^/test/([-_a-z0-9]+)/page/([0-9]+)#",
        "RULE"	=>	"section=$1&page=$2",
        "PATH"	=>	"/test/page.php",
    ),

    array(
        "CONDITION"	=>	"#^/test/([-_a-z0-9]+)$#",
        "RULE"	=>	"section=$1",
        "PATH"	=>	"/test/page.php",
    ),
]
