<?php

/**
 * Everything needed to run Lulo.
 */

define("LULO_DIR", __DIR__);
define("PARENT_LULO_DIR", __DIR__."/..");

define("LULO_DIR__CONTAINERS", LULO_DIR."/containers");
define("LULO_DIR__DB", LULO_DIR."/db");
define("LULO_DIR__DEPENDENCES", LULO_DIR."/dependences");
define("LULO_DIR__DEPENDENCES__VENDOR", LULO_DIR__DEPENDENCES."/vendor");
define("LULO_DIR__MODELS", LULO_DIR."/models");
define("LULO_DIR__MODELS__TRAITS", LULO_DIR__MODELS."/traits");
define("LULO_DIR__QUERY", LULO_DIR."/query");
define("LULO_DIR__TESTS", LULO_DIR."/tests");

require_once LULO_DIR."/configuration.php";

require_once LULO_DIR__DB."/db.class.php";

require_once LULO_DIR__CONTAINERS."/collection.class.php";
require_once LULO_DIR__QUERY."/twigtemplate.class.php";

require_once LULO_DIR__MODELS."/init.php";


?>
