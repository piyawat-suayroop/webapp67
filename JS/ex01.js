const matches = (obj, source) => Object.keys(source).every(key=>obj.hasOwnProperty(key)&&obj[key]===obj[key]===source[key]);
console.log(matches({age:20,hair:'short',bread:true},age=15));
console.log(matches({age:20},{age:20}));