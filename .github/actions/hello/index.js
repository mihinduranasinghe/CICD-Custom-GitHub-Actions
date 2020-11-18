const core = require("@actions/core");
const github = require("@actions/github");

try {
    // throw new console.error("some error simulating");

    const name = core.getInput("who-to-greet");
    console.log(`Hello ${name}`);

    const time = new Date();
    core.setOutput("time", time.toTimeString());

    // print the github object
    // console.log(JSON.stringify(github, null, "\t"));

    core.startGroup("Logging github object");
    onsole.log(JSON.stringify(github, null, "\t"));
    core.endGroup();

    //More about core package
    core.debug("Debug message");
    core.warning("Warning message"); // This will be displayed in yello color in logs
    core.error("Error message"); // This will be displayed in red color in logs
    core.setSecret("This text will be displayed as *** in logs");
    core.exportVariable("HELLO", "hello"); //Exporting environment variables
} catch (error) {
    core.setFailed(error.message);
}
