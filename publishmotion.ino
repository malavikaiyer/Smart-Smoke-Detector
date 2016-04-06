int sensorPin = 1;
 int sensorValue;
unsigned long lastTime = 0UL;
int inputPin = D0;              
int pirState = LOW;             
int val = 0;                    
int calibrateTime = 1000;      
char publishString[40];
int motion = 0;
float temperatureC=0;
float temperatureF=0;
void setup() {
Serial.begin(9600);

  pinMode(inputPin, INPUT);     // declare sensor as input
}

void loop(){
  if (calibrated()) {
    readTheSensor();
    publishTheData();
  }
  int reading = analogRead(sensorPin);  
 sensorValue = analogRead(0);  
 // converting that reading to voltage, for 3.3v arduino use 3.3
 float voltage = 3.3;
 //voltage /= 1024.0; 
 
 // print out the voltage
 Serial.print(voltage); Serial.println(" volts");
 
 // now print out the temperature
 temperatureC = (voltage - 0.5) * 10 ; 
  temperatureF = (temperatureC * 9.0 / 5.0) + 32.0;//converting from 10 mv per degree wit 500 mV offset

 Serial.print(temperatureC); Serial.println(" degrees C");
 
 Serial.print(temperatureF); Serial.println(" degrees F");


 delay(1000);       
 
   
  
  // read analog input pin 0
  Serial.println(sensorValue, DEC);  // prints the value read
  delay(100);  
  // wait 100ms for next reading
 //waiting a second

}

bool calibrated() {
  return millis() - calibrateTime > 0;
}

void readTheSensor() {
  val = digitalRead(inputPin);
}

void publishTheData() {
    unsigned long now = millis();
        if (now-lastTime>60000UL) 
    {
        lastTime = now;
        unsigned nowSec = now/1000UL;
        unsigned sec = nowSec%60;
        unsigned min = (nowSec%3600)/60;
        unsigned hours = (nowSec%86400)/3600;
  if (val == LOW) {
      
     motion = 1;
     
     if (motion == 1  && temperatureC>40 && sensorValue > 3000) {
         
     
        sprintf(publishString,"Motion detected data");
      // PIR has have just turned on
      Particle.publish("MotionDetected", publishString);
      pirState = HIGH;
    			
    			motion = 0;
    				}
  }
 	//publish uptime regardless
 
 	}
}


