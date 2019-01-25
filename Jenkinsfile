pipeline {
  agent any
  stages {
    stage('check') {
      steps {
        setGitHubPullRequestStatus()
      }
    }
  }
}