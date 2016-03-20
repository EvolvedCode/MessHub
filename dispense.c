#include <wiringPi.h>
#include <stdio.h>
#include <unistd.h>

#define POW 18
#define REL 17
#define CLO 23
#define OPE 22

int main(int argc, char *argv[]){
	int times=1;
	if(argc!=2){
		printf("usage: <meals to dispense>\n");
		return 0;
	}
	else{
		times=atoi(argv[1]);
	}
	printf("Starting to dispense %d meals.\n",times);

	wiringPiSetupGpio();
	pinMode(POW, OUTPUT);
	pinMode(REL, OUTPUT);
	pinMode(CLO, INPUT);
	pinMode(OPE, INPUT);
	pullUpDnControl(CLO, PUD_DOWN);
	pullUpDnControl(OPE, PUD_DOWN);
	
	while(digitalRead(CLO)==0){
		digitalWrite(REL,0);
		digitalWrite(POW,1);
		delay(1);
	}
	digitalWrite(POW,0);
	
	int i=0;
	for(i=0; i<times; i++){
		//if(digitalRead(CLO)==1){
		digitalWrite(REL,1);
		digitalWrite(POW,1);
		while(digitalRead(OPE)==0){
			delay(5);
		}
		digitalWrite(POW,0);
		digitalWrite(REL,0);
		delay(500);
		digitalWrite(POW,1);
		while(digitalRead(CLO)==0){
			delay(5);
		}
		digitalWrite(POW,0);
		//}
		printf("%d\n",i+1);
		delay(1000);
	}
	digitalWrite(POW,0);
	digitalWrite(REL,0);
	printf("Dispensed all %d meals.\n",times);
	return 0;
}
