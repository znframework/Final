<?php namespace ZN;

class ZerocoreExtends extends \ZN\Test\GlobalExtends
{
    const resources = self::default . 'package-zerocore/resources/';
    
    public function __construct()
    {
        parent::__construct();

        $this->autoloaderMock = new class extends Autoloader
        {
            public function mockCreateClassMapTopOutput(&$output)
            {
                self::$path = 'unknownxxx';

                $this->createClassMapTopOutput($output);

                self::$path = PROJECT_DIR . 'ClassMap.php';
            }

            public function mockAliases()
            {
                $this->aliases();
            }

            public function mockGetFacadeContent()
            {
                return $this->getFacadeContent('Facade', 'Target\Class', 'const example = 1;');
            }

            public function mockGetClassNamespace(&$facade, &$namespace)
            {
                return $this->getClassNamespace($facade, $namespace);
            }
        };

        $this->supportMock = new class extends Support
        {
            public function mockLoaded($name, $value, $func, $error)
            {
                return $this->_loaded($name, $value, $func, $error);
            }
        };

        $this->staticAccessMock = new class extends StaticAccess
        {
            public static function getClassName()
            {
                return 'ExampleClass';
            }
        };

        $this->modelMock = new class extends Model
        {
     
        };

        $this->controllerMock = new class extends Controller
        {
            const restore = [];
            const extract = true;

            public function __construct()
            {
                Inclusion\Project\View::$data['example'] = 'Example';

                parent::__construct();
            }

            public function run()
            {
                return $this->example;
            }
        };
    }
}