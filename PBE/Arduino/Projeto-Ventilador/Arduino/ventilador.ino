char tecla;
bool piscando = false;
int ventilador = 7;

void setup() {
  Serial.begin(9600);
  pinMode(ventilador, OUTPUT);
}


void loop() {
  if (Serial.available() > 0) {
    tecla = Serial.read();
    if (tecla == 'l') {
      digitalWrite(ventilador, HIGH);
    }
    if (tecla == 'd') {
      digitalWrite(ventilador, LOW);
    }
  }
}
