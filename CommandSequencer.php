class CommandSequencer
        {
        private $errors=[
        ];
        private $config=[
              'baseFolder'=>'/home/zenitron-user/scripts/';
        ];
        public function _construct((string)$command,$dataType='array(int)')   // CommandSequencer(MakeAgeless,'array('int')');' //command=class
                {
                $this->data=$this->commandStartController($command);
                $this->$command=$Command=new $command;
                $this->data=$this->stopController($command,$dataType);
                }
        private function startCantroller($command)
                {
                include$this->config['baseFolder'].ucfirst($command).'.php';
                }
        private function stopControoler($command)
                {
                $this->clearMetods();
                $this->clearPropsExept($prop);
                }
        private function clearMetods()
                {
                $metodsArray=get_class_methods();
                foreach($metods as $metod)
                        {
                        unset($metod);
                        }
                if(count(get_class_methods())===(int)0)
                        {
                        //INeudachinaAvatar
                        }
                else
                        {
                        $this->errors[]=__FUNCTION__;
                        }
                }
        private function clearPropsExept((string)$propertys)
                {
                foreach($properties as $objectOfProperty)
                        {
                        if($objectOfProperty==$command)
                                {
                                //INeudachinaAvatar
                                }
                        else
                                {
                                unset($this->$objectOfProperty);
                                }
                        }
                }
