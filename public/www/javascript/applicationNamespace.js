// Top level namespace

var applicationNamespace = applicationNamespace || {};

function extendNamespace (ns , ns_string)
{
    var parts = ns_string.split(".");

    var parent = ns;

    var partsLength;

    var count;

    if (parts[0] === "applicationNamespace") {
        parts = parts.slice(1);
    }

    partsLength = parts.length;

    for (count = 0; count < partsLength; count++) {

        if (typeof parent[parts[count]] === "undefined") {

            parent[parts[count]] = {};
        }

        parent = parent[parts[count]];
    }

    return parent;

}

// sample usage:
// extend myApp with a deeply nested namespace
var mod = extendNamespace(applicationNamespace, 'applicationNamespace.modules.module2');
// the correct object with nested depths is output
console.log(mod);
// minor test to check the instance of mod can also
// be used outside of the myApp namesapce as a clone
// that includes the extensions
console.log(mod === applicationNamespace.modules.module2); //true
// further demonstration of easier nested namespace
// assignment using extend
extendNamespace(applicationNamespace, 'moduleA.moduleB.moduleC.moduleD');
extendNamespace(applicationNamespace, 'longer.version.looks.like.this');
console.log(applicationNamespace);
