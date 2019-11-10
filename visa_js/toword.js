function number2text(value){var fraction=Math.round(frac(value)*100);var f_text="";if(fraction>0){f_text="AND "+convert_number(fraction)+" KOBO";}
return convert_number(value)+" NAIRA "+f_text+" ONLY";}
function frac(f){return f%1;}
function convert_number(number)
{if((number<0)||(number>999999999))
{return"NUMBER OUT OF RANGE!";}
var Gn=Math.floor(number/1000000);number-=Gn*1000000;var kn=Math.floor(number/100000);number-=kn*100000;var Hn=Math.floor(number/1000);number-=Hn*1000;var Dn=Math.floor(number/100);number=number%100;var tn=Math.floor(number/10);var one=Math.floor(number%10);var res="";if(Gn>0)
{res+=(convert_number(Gn)+" MILLION");}
if(kn>0)
{res+=(((res=="")?"":" ")+convert_number(kn)+" HUNDRED THOUSAND");}
if(Hn>0)
{res+=(((res=="")?"":" ")+convert_number(Hn)+" THOUSAND");}
if(Dn)
{res+=(((res=="")?"":" ")+convert_number(Dn)+" HUNDRED");}
var ones=Array("","ONE","TWO","THREE","FOUR","FIVE","SIX","SEVEN","EIGHT","NINE","TEN","ELEVEN","TWELVE","THIRTEEN","FOURTEEN","FIFTEEN","SIXTEEN","SEVENTEEN","EIGHTEEN","NINETEEN");var tens=Array("","","TWENTY","THIRTY","FOURTY","FIFTY","SIXTY","SEVENTY","EIGHTY","NINETY");if(tn>0||one>0)
{if(!(res==""))
{res+=" AND ";}
if(tn<2)
{res+=ones[tn*10+one];}
else
{res+=tens[tn];if(one>0)
{res+=("-"+ones[one]);}}}
if(res=="")
{res="zero";}
return res;}