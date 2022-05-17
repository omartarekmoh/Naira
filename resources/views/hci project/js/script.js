'use strict'
function getSecondLargest(nums) {
    // Complete the function
   let r = nums.sort((a,b) =>{
   if(a > b) return 1;
   if(a < b) return -1;
   return 0;
 })
 let y = r.length; //size of array
 
 let largest = r[y-1];
  for(let i = y -1; i>= 0;i--){
    if(largest=== r[i]){
       continue
    }
    else{
       console.log(r[i]) ;
       break;
       
    }
 }
 return r;
 }