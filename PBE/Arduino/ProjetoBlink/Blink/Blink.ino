char tecla;
bool piscando = false;
int lampada = 7;

void setup() {
  Serial.begin(9600);
  pinMode(lampada, OUTPUT);
}


void loop() {
  if (Serial.available() > 0) {
    tecla = Serial.read();
    if (tecla == 'l') {
      digitalWrite(lampada, HIGH);
    }
    if (tecla == 'd') {
      digitalWrite(lampada, LOW);
    }
    if (tecla == 'p') {
      piscar();
      piscando = true;
    }
  }
}


void piscar() {
  while (piscando == true) {
    digitalWrite(lampada, HIGH);
    delay(500);
    digitalWrite(lampada, LOW);
    delay(500);

    tecla = Serial.read();
    if (tecla == 'd') {
      break;
      piscando = false;
    }
  }
}