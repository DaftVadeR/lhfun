function getTitleCase(str) {
    var words = str.split(" ");
    var newStr = "";

    for (var wordKey in words) {
        var firstLetter = words[wordKey].charAt(0).toUpperCase();
        var remainder = words[wordKey].slice(1).toLowerCase();

        newStr = newStr.concat((newStr.length > 0 ? " " : ''), firstLetter, remainder);
    }

    return newStr;
}
