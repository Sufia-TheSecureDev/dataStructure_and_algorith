<?php 
//node represantation
 class Node{
 	public   $value;
 	public   $next;

 public function __construct(){
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();
  
		if (empty($numberOfArguments) ){ // it will be work as dummy node
			  $this->value = 0;
			 $this->next = null; 
		}
        elseif (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    } 
    public  function __construct1($value){
        $this->value = $value;
	    $this->next = null; 
    }  
} 

function bulk_insert(...$elements){
	for ($i = 0 ; $i< count($elements) ; $i++ )  { 
		insert_at_tail( $elements[$i]);   ;
		}
}
function insert_at_tail($value) { 
  	$head = $GLOBALS['head'] ;

	$tmpNode = new Node($value);
	$copyHead =$head   ; 
	while($copyHead->next != null){
		$copyHead = $copyHead->next;
	}
	$copyHead->next = $tmpNode;
}
function insert_at_head($value){
	$head =   $GLOBALS['head'] ;
	$oldNextNode = $head->next;
	$head->next = new Node($value);
	$head->next->next = $oldNextNode;
}
function insert_at($position,$value){
	$head =   $GLOBALS['head'] ;
	$currentNode = $head ; 
	while($position >0){
		$currentNode = $currentNode->next;
		$position-- ;
	}
	$nextNode = $currentNode->next ; 
	$newNode = new Node($value);
	$newNode->next = $nextNode;
	$currentNode->next = $newNode; 
}
function get_element_at($position){
	$head =   $GLOBALS['head'] ;
	$currentNode = $head->next;
	while ($position > 0) {
		$currentNode = $currentNode->next;
		$position--;
	}
	return $currentNode->value;
}
function delete_at($position){
	$head =   $GLOBALS['head'] ;
	$currentNode = $head;
	while($position >0){
		$currentNode = $currentNode->next;
		$position-- ;
	}
	$nextNode = $currentNode->next->next;
	$currentNode->next = $nextNode;
}
function print_linked_list(){
	$head =   $GLOBALS['head'] ;
	$copyHead = $head->next; // started from next to ignore dummy node value 0  
	while($copyHead  != null){
		echo $copyHead->value.' ';
		$copyHead = $copyHead->next;
	} 
}
function reverse_a_linked_list($head){ 
	$previous = null;
	$current  = $head->next;
	$next     = $current->next;
	while($current != null){
		$current->next = $previous;
		$previous = $current;
		$current = $next;
		$next = $current->next ??  null;
	}
	$head->next = $previous;
} 
$head = new Node(); //  dummy node created
bulk_insert(4,8,6,9); // insertion at tail with bulk func for multiple value
insert_at_tail(3);     //insertion at tail with single  value 
insert_at_head(5);   // insertion at head after dummy node
echo '<br> ';
print_linked_list(); // 5 4 8 6 9 3 skiped dummy node
echo '<br> '.get_element_at(2); // 8
 delete_at(4); // 9
echo '<br> <br>'; 
print_linked_list();  // 5 4 8 6 3
insert_at(2, 10);
echo '<br> <br>'; 
print_linked_list(); // 5 4 10 8 6 3
reverse_a_linked_list($head);
echo '<br>  '; 
print_linked_list(); // 3 6 8 10 4 5
