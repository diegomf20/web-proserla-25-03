module.exports = {
    root: false,
    "rules": {
      "no-mixed-spaces-and-tabs": 0, // disable rule
    },
    "parserOptions": {
        "parser": "babel-eslint",
        "sourceType": "module",
        "ecmaVersion": 6,
        "ecmaFeatures": {
            "experimentalObjectRestSpread": true
        }
    },
    plugins: [
        'vue'
    ],
}