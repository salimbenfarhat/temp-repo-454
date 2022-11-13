function random(length, type) {
  const characters = [
    ['numerical', '0123456789'],
    ['alphabetical', 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'],
    ['alphanumerical', '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'],
    ['full', '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()+?']
  ];
  let result = '';
  switch (type) {
    case 'numerical':
      let charsNumericalLength = characters[0][1].length;
      for (let i = 0; i < length; i++) {
        result += characters[0][1].charAt(Math.floor(Math.random() * charsNumericalLength));
      }
      return result;
      break;
    case 'alphabetical':
      let charsAlphabeticalLength = characters[1][1].length;
      for (let i = 0; i < length; i++) {
        result += characters[1][1].charAt(Math.floor(Math.random() * charsAlphabeticalLength));
      }
      return result;
      break;
    case 'alphanumerical':
      let charsAlphanumericalLength = characters[2][1].length;
      for (let i = 0; i < length; i++) {
        result += characters[2][1].charAt(Math.floor(Math.random() * charsAlphanumericalLength));
      }
      return result;
      break;      
    default:
      let charsFullLength = characters[3][1].length;
      for (let i = 0; i < length; i++) {
        result += characters[3][1].charAt(Math.floor(Math.random() * charsFullLength));
      }
      return result;
      break;
  }
}
function callDOM(id, realvalue) {
  return document.getElementById(id).value = realvalue;
}