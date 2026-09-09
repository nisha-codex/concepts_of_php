

<?php
echo("\n---------------------------------------------------------------");
echo("\n---------------------------------------------------------------");
echo ("\n\t 🏝️ Welcome to Mysterious Island Adventure! 🏝️");
echo("\n---------------------------------------------------------------");
echo("\n---------------------------------------------------------------");
echo ("\nTum island par pahunch gaye ho.\n Kya tum jungle mein jaana chahoge? (yes/no):");
$ans = strtolower(readline());

if($ans == "yes"){
    echo ("\n🌳 Tum jungle mein enter kar gaye!");
    echo ("\nJungle mein tumhe do raaste milte hain:(left ya right)?");
    $ans = strtolower(readline());

    if($ans== "right"){   //right side wale rasta
        echo("\n🐉Tumhe ek sleeping dragon dikhta hai!💰 Uske paas treasure hai.❓Kya tum uske paas jaoge?(yes/no):");
        $ans = strtolower(readline());
        if($ans=="yes"){  //dragon ke pass jana h
            echo ("\n❓ Kya tum treasure churaoge? (yes/no):");
            $ans = strtolower(readline());
            if($ans=="yes"){  //treasure churana h
                echo ("\n💰 Tum treasure chura lete ho...🐉 DRAGON JAAG GAYA! ❓ Kya tum bhaagoge? (yes/no):");
                $ans=strtolower(readline());
                if($ans="yes"){    //yes bhagna h
                    echo ("\n🏃💨 Tum bhaag kar bach gaye!💰 Treasure bhi tumhara!🏆 YOU WIN!");
                }

                else{      // nhi bhagna h 
                    echo ("\n💀 Dragon ne tumhe pakad liya!😂 Adventure Over!");
                }
            }
            else{   //treasure nhi churana h
                echo ("\n👏 Smart decision!🐉 Dragon sota rehta hai.🏃 Tum safely escape kar jaate ho.");
                exit;
            }

        }
        else{   // dragon ke pass nhi jana h 
            echo("\n😎 Zinda rehna treasure se zyada important hai!🏃 Tum safely escape kar jaate ho.");
            exit;
        }
        
    }
    else{       //left side wale rasta
            echo("\n 🧰 Tumhe ek treasure chest milta hai. \n❓ Kya tum chest open karoge? (yes/no):");
            $ans = strtolower(readline());
            if($ans=="no"){
                echo ("\n😎 Tum chest ko ignore karke aage badh jaate ho.\n 🎉 Tumhe ek secret exit mil jata hai!\n🏆 SAFE ESCAPE!");
                exit;
            }
            else{    //treasure open krna h
                echo ("\n🔒 Chest locked hai.\n❓ Kya tumhare paas key hai? (yes/no):");
                $ans = strtolower(readline());
                if($ans=="yes"){    // key h mere pass
                    echo ("\n🗝️ Chest open!\n💰 Treasure mil gaya!\n🏆 YOU WIN");
                }
                else{     //if key nhi h
                    echo ("\n😂 Treasure saamne hai, par key gayab!\n🗺️ Tumhe ek map milta hai.\n🏃 Tum island se escape kar jaate ho.");
                    exit;
                }
            }
            
        
    }
}

else{ // if ans is no if i dont want to go to jungle
  echo("🏠 Tumne jungle mein jaane se mana kar diya.\nTum beach par hi ruk jaate ho. \n🌊 Suddenly, ek boat island ke paas aati hai! \n🎉 Tum safely island se ghar wapas chale jaate ho.\n😂 Adventure khatam!\n\n Bravery: 0% \nSurvival: 100%");
    exit;
}