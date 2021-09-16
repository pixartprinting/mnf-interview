# Legacy monolith to the cloud

1. Design the migration of a legacy monolith to a docker cluster in the cloud (e.g. Fargate, the infrastructure is managed and not part of the exercise) 
    * Current situation:
      * Several PHP monoliths depending each other via non-versioned folder linking 
        * i.e. classes of one project are imported into the others, default global variables are overwritten
      * Deploy via `git pull` on a shared NFS mounted on all the production, on-premise, VMs
      * Versioned hardcoded global variables including credentials and configurations
      * Shared storage FS mounted on all the production, on-premise, VMs
      * HTTP calls to eternal services
      * SDKs calls to external services
    * Desired outcome:
      * The applications are deployed via pipeline on a managed docker-as-a-service infrastructure
      * Credentials are not versioned
      * No production downtime
2. Evaluate the time needed to implement the solution
3. Discuss trade-offs of the system designed (speed, cost, user experience, dev effort, security)  
4. Discuss system deployment and update strategy (how, where, why, trade-offs …)
5. Discuss system monitoring, health evaluation, log management

