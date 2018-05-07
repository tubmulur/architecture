class CommandSequencer
        {
        private $config=[
              'baseFolder'=>'/home/zenitron-user/scripts/';
        ];
        public function _construct($command,$dataType='array(int)')   // CommandSequencer(MakeAgeless,'array('int')');' //command=class
                {
                $this->data=$this->commandStartController($command);
                $this->$command=$Command=new $command;
                $this->data=$this->stopController($command,$dataType);
                }
        private function startCantroller($command)
                {
                include$this->config['baseFolder'].ucfirst($command).'.php';
                }
        private function stopControoler()
                {
                $this->clearMetods();
                $this->clearPropsExept($prop);
                }
        private function clearMethods()
                {
                $metodsArray=get_class_methods();
                foreach($metods as $metod)
                        {
                        unset($metod);
                        }        
                }
        }
