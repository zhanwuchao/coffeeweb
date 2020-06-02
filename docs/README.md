# osu!coffee  

## Command list (Sorted by category)    

anything in curly braces { } , indicates a required parameter  
categories are shown based on response to `-help`; a "//" in between category names refers to an alias  

### Uncategorized    

-help | list of commands, differs based on developer status or not  
-info | public bot information  
-invite | bot invite, support server invite, osu!cafe invite    
-bruh | bruh  
-donate | get donation details  
-donors | get list of donors  

### Developer // Dev
-eval {code} | eval js code from the bot  
-restart | restart the pm2 process and bot  
-bi   | fetch current bot statistics  
-psi | advanced server info  
-pui | advanced user info  
-spost | post server count to top.gg   

### Images  

-neko | returns neko image using the nekobot api  
-kanna | returns kanna image using the nekobot api  
-coffee | returns coffee image using the nekobot api  
-meme | returns meme from ksoft.si api, scraped from r/dankmemes


### osu!  

-gamemodes | returns gamemode aliases  
-gnlb | returns top 10 leaderboard after the rebalance for standard     
-newpp {player} | returns pp rebalance for standard players    
-`gamemode` {player} | returns players stats     

### Utility  

-si | server info  
-ui | user info  
-ping | grab the websocket and heartbeat ping of the bot  

## Events  

Current running events in the bot  

message.js | handles messages sent to check if they are sent by a bot, a command, or an easteregg trigger  
ready.js | sends a report to the [logging server](https://discord.gg/invite/XeaGkCM) containing low stats and startup time | also changes the bot status every 15 minutes     

## Easter Eggs  

Eastereggs are triggered by plain text in messages, see if you can find them all!   

## Current contributers:  

### Development-  

trq | primary developer  
zyoulou | secondary developer  
epicmceditor | secondary developer  
rikii | web development   
varler | developer feedback  
rmarc | developer feedback  
czarlz | developer feedback  

### Graphics-  

vanreto - osu!coffee logo (coffee cup)  

## Looking to contribute?  

### Development  

If you are looking to help with the development of osu!coffee and it's website, dm `trq#8258` on discord  

### Graphics  

Looking to make graphics and become a part of ous!coffee? Join the support server or contact `trq#8258` on discord  

### Maintaining and Corrections  

Notice a typo or a bug you can easily fix? Check out the website's [github repository](https://github.com/trapss/coffeeweb) to fork and then make a pull request!
