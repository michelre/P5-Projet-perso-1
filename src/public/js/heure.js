export function refreshHour() {
  const time = new Date;
  const heure = time.getHours();
  const min = time.getMinutes();
  const sec = time.getSeconds();
  const jour = time.getDate();
  const mois = time.getMonth() + 1;
  const annee = time.getFullYear();
  let sec0 = "";
  let min0 = "";
  let heure0 = "";
  if (sec < 10)
    sec0 = "0";
  if (min < 10)
    min0 = "0";
  if (heure < 10)
    heure0 = "0";
  const DinaHeure = heure0 + heure + ":" + min0 + min + ":" + sec0 + sec;
  const which = DinaHeure;
  if (document.getElementById) {
    document.getElementById("heure").innerHTML = which;
  }
}
