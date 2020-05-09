# osu!coffee
## Command list (Sorted by category)    

anything in curly braces { } , indicates a required paramater  
categories are shown based on responce to `-help`; a "//" in bewtween category names refers to an alias  

### Uncategorized    

-help | list of commands, differs based on developer status or not  
-bruh | bruh  
-donate | get donation details  
-donors | get list of donors  

### Developer // Dev
-eval {code} | evalulate js code from the bot, developer only    
-restart | restart the pm2 process and bot, developer only  
-bi   | fetch currentbot statistics, developer only  
-ping | grab the websocket and heartbeat ping of the bot  

### Images  

-neko | returns neko image using the nekobot api  
-kanna | returns kanna image using the nekobot api  
-coffee | returns coffee image using the nekobot api  

### osu!  

-gamemodes | returns gamemode aliases  
-gnlb | returns top 10 leaderboard after the rebalance for standard     
-newpp {player} | returns pp rebalance for standard players    
-`gamemode` {player} | returns players stats    
-super`gamemode` {player} | returns extended profile stats  

## Events  

Current running events in the bot  

message.js | handles messages sent to check if they are sent by a bot, a command, or an easteregg trigger  
ready.js | sends a report to the [logging server](https://discord.gg/invite/XeaGkCM) containing low stats and startup time   

## Easter Eggs  

Eastereggs are triggered by plain text in messages, see if you can find them all!   
