char tecla;
bool piscando = false;

void setup() {
  Serial.begin(9600);
  pinMode(LED_BUILTIN, OUTPUT);
}


void loop() {
  if (Serial.available() > 0) {
    tecla = Serial.read();
    if (tecla == 'l') {
      digitalWrite(LED_BUILTIN, HIGH);
    }
    if (tecla == 'd') {
      digitalWrite(LED_BUILTIN, LOW);
    }
    if (tecla == 'p') {
      piscar();
      piscando = true;
    }
  }
}


void piscar() {
  while (piscando == true) {
    digitalWrite(LED_BUILTIN, HIGH);
    delay(500);
    digitalWrite(LED_BUILTIN, LOW);
    delay(500);

    tecla = Serial.read();
    if (tecla == 'd') {
      break;
      piscando = false;
    }
  }
}