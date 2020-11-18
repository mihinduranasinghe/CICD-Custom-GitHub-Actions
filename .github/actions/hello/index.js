const core = require("@actions/core");
const github = require("@actions/github");

try {
    // throw new console.error("some error simulating");
    const name = core.getInput("who-to-greet");
    console.log(`Hello ${name}`);

    const time = new Date();
    core.setOutput("time", time.toTimeString());

    // print the github object
    console.log(JSON.stringify(github, null, "\t"));
} catch (error) {
    core.setFailed(error.message);
}
