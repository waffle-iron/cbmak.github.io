pipeline {
  agent any
  stages {
    stage('check') {
      steps {
        setGitHubPullRequestStatus(context: env.JOB_NAME, message: "Build finished successfully", state: 'SUCCESS')
      }
    }
  }
}
