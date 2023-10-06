<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript tutorial Machmul Pratama</title>
</head>
<body>
<script> 
let duit = 10000;
let i = 0;
let j = 0;
let day;
if (duit > 20000) {
   console.log("Orang kaya banget nih, duitnya halal kah?"); 
} else if (duit == 10000) {
    console.log("Kelas menengah nih pasti, duitnya ngepas");
} else {
    console.log("Kerja ngapa bos, duit aja dikit malah kagak mau kerja");
}

for (i = 0; i < 4; i++){
    console.log(i);
}

switch (new Date().getDay()) {
  case 0:
    day = "Libur";
    break;
  case 1:
    day = "Hari suram";
    break;
  case 2:
     day = "Masih sama aja";
    break;
  case 3:
    day = "Mulai nikmat";
    break;
  case 4:
    day = "Suram";
    break;
  case 5:
    day = "Holy day";
    break;
  case 6:
    day = "Yeah libur";
}
console.log (day);

do {
    console.log("Machmul is cool", j++);
    j++;
}
while (j < 5);

function perkalian (a, b){
    return a * b;
}
console.log (perkalian(12, 10));
</script>
</body>
</html>