# MessHub
Code for a Raspberry Pi / server combo that manages and dispenses limited ammounts of items to users at  portable hubs connected to the internet.
We built a device, namely a hub, that dispenses meals and clothes to refugees, much like an actual mess. It is portable and fully battery powered, connecting to the internet via 3G. As a result, it can be placed near refugee camps, in order for refugees not to have to walk great distances in possibly adverse conditions to get food or clothing. Since the device already uses a Raspberry Pi Zero (it was prototyped with a Raspberry Pi 2) to control the motor that dispenses the meals, we've added the ability for the Pi to be used as a regular computer by refugees as soon as the meals in stock have emptied in the device. Additionally, WiFi connectivity can be provided via an extra WiFi dongle. This feature allows a great deal of opportunities to refugees, such as finding employment through the web, or communicating with family members.

A MySQL database hosted on Microsoft Azure stores all required information such as where the hubs are located and how many meals are in stock, but also stores an updateable database of refugees that can be accessed through Azure by the government that employs MessHub. Volunteers can find the shortest path to restock the devices, as well as track the movements of certain users of the device using an Azure webserver that produces a static map of the above information via PHP.

Police and government can, at any time, know where each refugee is located and were he or she may be trying to move to. This helps with certain security issues host-countries may be having, and can be used in preventing terrorism and other illegal activities. Finally, these data can be processed with Azure Machine Learning once a big enough data set is built, and can therefore be used to notify police as soon as a target event is expected to occur.

#Pictures
![Alt text](http://i.imgur.com/ZVUpURy.jpg)
![Alt text](http://i.imgur.com/eJDIGtu.jpg)
![Alt text](http://i.imgur.com/GxtUqQL.jpg)
