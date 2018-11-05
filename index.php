<?php 
// $sum=0;
// for($i=1;$i<=100;$i++) {
// $sum+=$i;
// }
// echo $sum;

// $sum= $i = 0;
// while( $i<= 100 ) {
// $sum += ( $i++ );
// }
// echo $sum;

// function get_sum($n){
// return $n==1?1:$n+get_sum($n-1);
// }
// echo get_sum(100);

#include <stdio.h>
// int func(int n)
// {
//     if(n == 1)
//     {
//         return 1;
//     }
//     else if(n > 0)
//     {
//         return (n * func(n - 1));
//     }
//     else
//     {
//         printf("error\n");
//     }
// }
// int main()
// {
//     int n;
//     int s;
//     printf("please input n:\n");
//     scanf("%d",&n);
//     s = func(n);
//     printf("%d!=%d\n",n,s);
//     return 0;
// }

#include <stdio.h>
// int main()
// {
//     int n;
//     int i;
//     int s = 1;
//     printf("please input n:\n");
//     scanf("%d",&n);
//     printf("%d!=",n);
//     for(i = n; i > 1; i--)
//     {
//         s *= i;
//         printf("%d*",i);
//     }
//     printf("1=%d\n",s);
//     return 0;
// }

// $string="abba";
//   $stra=array();
//   $strb=array();
//   $res=checkhuiwen($string);
//   function checkhuiwen($string){
//        //输入字符串转换为数组
//      for($i=0;$i<strlen($string);$i++){
//         $stra[$i]=$string[$i];
//       }
//        //逆序输出数组array_reverse
//        $strb=array_reverse($stra);
//        //判断两数组是否相等，相等为回文
//       for($i=0;$i<count($stra);$i++){
//        if($stra[$i]!=$strb[$i]){
//           return 1;
//           break;
//        }     
//   }
//   return 2;
//   }
//   if($res==2){
//     echo "YES";
//   }else{
//     echo "NO!";
//   }

　　class Person{
	public $name;
	public $age;
　　}
?>