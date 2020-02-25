<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;

/*class Cart extends Model
//{
    //
}*/

class Cart{


    public $items=null;

    public $totalQty=0;

    public $totalPrice=0;

    public $totalDiscountPrice=0;

    public $totalPurePrice = 0;

   /**
    * Class constructor.
    */
   public function __construct($oldCart)
   {
         if($oldCart){

            $this->items=$oldCart->items;

            $this->totalQty=$oldCart->totalQty;

            $this->totalPrice=$oldCart->totalPrice;

            $this->totalDiscountPrice = $oldCart->totalDiscountPrice;

         }


   }

   public function add($item,$id){

      if($item->discount){
            $storedItem = ['qty' => 0, 'price' => $item->discount, 'item' => $item];
      }else{
          $storedItem=['qty'=>0,'price'=>$item->price,'item'=>$item];
      }
        
    if($this->items){


        if(array_key_exists($id,$this->items)){
      
          $storedItem=$this->items[$id];



        }
    } 
    $storedItem['qty']++;
    if($item->discount){
            $storedItem['price'] = $item->discount * $storedItem['qty'];
            $this->totalPrice += $item->discount;
            $this->totalDiscountPrice +=($item->price -$item->discount);
    }
    else{
        $storedItem['price']=$item->price * $storedItem['qty'];
            $this->totalPrice += $item->price;
    }
    
    
    $this->items[$id]= $storedItem;
    $this->totalQty++;
        $this->totalPurePrice+=$item->price;

   }
   public function remove($item ,$id){

       
    if($this->items){



            if (array_key_exists($id, $this->items)) {

                $storedItem = $this->items[$id];
                $this->totalQty--;
                if($item->discount){

                    $this->items[$id]['price'] = $item->discount * $storedItem['qty'];
                    $this->totalPrice -= $item->discount;
                    $this->totalDiscountPrice -= ($item->price - $item->discount);

                } else {
                    $this->items[$id]['price'] -= $item->price * $storedItem['qty'];
                    $this->totalPrice -= $item->price;
                }

                $this->totalPurePrice -= $item->price;

                if($this->items[$id]['qty']>1){

                    $this->items[$id]['qty'] --;
                }
                else{
                        unset($this->items[$id]);
                }

            }


    }

   }


}
