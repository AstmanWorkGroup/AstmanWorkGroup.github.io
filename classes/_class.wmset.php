<?PHP

class wmset{


  var $sets = array( array() );

  public function __construct(){
    
    # Настройка стоимости деревьев! По порядку!
    $this->sets[1]["t_a"] = 1;
    $this->sets[1]["t_b"] = 10;
    $this->sets[1]["t_c"] = 70;
    $this->sets[1]["t_d"] = 280;
    $this->sets[1]["t_e"] = 420;
  
  }
  
  
  function SetsList(){
    
    unset($this->sets[0]);
    return $this->sets;
  
  }
  
  
  function GetSet($sum){
    $sum = intval( ($sum +1) * 0.317);
    if($sum < 20) return false; 
    
    $ret_tree = array();
    
    while(true){
    
    
      if(($sum*0.7) >= $this->sets[1]["t_e"]){ 
      
        $sum = $sum - $this->sets[1]["t_e"];
        $ret_tree["t_e"] = $ret_tree["t_e"]+1;
        
      }elseif(($sum*0.7) >= $this->sets[1]["t_d"]){
      
        $sum = $sum - $this->sets[1]["t_d"];
        $ret_tree["t_d"] = $ret_tree["t_d"]+1;
        
      }elseif(($sum*0.7) >= $this->sets[1]["t_c"]){
      
        $sum = $sum - $this->sets[1]["t_c"];
        $ret_tree["t_c"] = $ret_tree["t_c"]+1;
        
      }elseif(($sum*0.7) >= $this->sets[1]["t_b"]){ 
      
        $sum = $sum - $this->sets[1]["t_b"];
        $ret_tree["t_b"] = $ret_tree["t_b"]+1;
        
      }elseif($sum >= $this->sets[1]["t_a"]){ 
        
        $sum = $sum - $this->sets[1]["t_a"];
        $ret_tree["t_a"] = $ret_tree["t_a"]+1;
        
      }else break;
    
    }
    
    return $ret_tree;
  }
  
}


?>