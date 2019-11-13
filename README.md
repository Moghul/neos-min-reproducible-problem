# neos-min-reproducible-problem
Repository exists as basis for minimum reproducible bugs

# Run the following commands to see the error trigger:

### Creates the components we need
./flow video:createcomponents
### Shows that the videos are saved as expected
./flow video:getvideos
### Triggers the exception
./flow video:countvideos

# Expected error:

```
Exception #1 in line 39 of /opt/Quickstart/Packages/Libraries/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php: Notice: Undefined index: component in /opt/Quickstart/Packages/Libraries/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php line 39

39 Neos\Flow\Error\ErrorHandler::handleError(8, "Undefined index: component", "/opt/Quickstart/Packages/Libraries/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php", 39, array|3|)
38 Doctrine\ORM\Mapping\DefaultQuoteStrategy::getColumnName("component", Neos\Flow\Persistence\Doctrine\Mapping\ClassMetadata, Doctrine\DBAL\Platforms\MariaDb1027Platform)
37 Doctrine\ORM\Query\SqlWalker::walkPathExpression(Doctrine\ORM\Query\AST\PathExpression)
36 Doctrine\ORM\Query\AST\PathExpression::dispatch(Doctrine\ORM\Query\SqlWalker)
35 Doctrine\ORM\Query\SqlWalker::walkArithmeticPrimary(Doctrine\ORM\Query\AST\PathExpression)
34 Doctrine\ORM\Query\SqlWalker::walkArithmeticFactor(Doctrine\ORM\Query\AST\PathExpression)
33 Doctrine\ORM\Query\SqlWalker::walkArithmeticTerm(Doctrine\ORM\Query\AST\PathExpression)
32 Doctrine\ORM\Query\SqlWalker::walkSimpleArithmeticExpression(Doctrine\ORM\Query\AST\PathExpression)
31 Doctrine\ORM\Query\SqlWalker::walkAggregateExpression(Doctrine\ORM\Query\AST\AggregateExpression)
30 Doctrine\ORM\Query\AST\AggregateExpression::dispatch(Doctrine\ORM\Query\SqlWalker)
29 Doctrine\ORM\Query\SqlWalker::walkSelectExpression(Doctrine\ORM\Query\AST\SelectExpression)
28 array_map(array|2|, array|1|)
27 Doctrine\ORM\Query\SqlWalker::walkSelectClause(Doctrine\ORM\Query\AST\SelectClause)
26 Doctrine\ORM\Query\SqlWalker::walkSelectStatement(Doctrine\ORM\Query\AST\SelectStatement)
25 Doctrine\ORM\Query\Exec\SingleSelectExecutor::__construct(Doctrine\ORM\Query\AST\SelectStatement, Doctrine\ORM\Query\SqlWalker)
24 Doctrine\ORM\Query\SqlWalker::getExecutor(Doctrine\ORM\Query\AST\SelectStatement)
23 Doctrine\ORM\Query\Parser::parse()
22 Doctrine\ORM\Query::_parse()
21 Doctrine\ORM\Query::_doExecute()
20 Doctrine\ORM\AbstractQuery::executeIgnoreQueryCache(NULL, 4)
19 Doctrine\ORM\AbstractQuery::execute(NULL, 4)
18 Doctrine\ORM\AbstractQuery::getSingleResult(4)
17 Doctrine\ORM\AbstractQuery::getSingleScalarResult()
16 Neos\Flow\Persistence\Doctrine\Query_Original::count()
15 Neos\Flow\Persistence\Repository::countAll()
14 call_user_func_array(array|2|, array|0|)
13 Neos\Flow\ObjectManagement\DependencyInjection\DependencyProxy::__call("countAll", array|0|)
12 Acme\Demo\Video\Command\VideoCommandController_Original::countAllVideosCommand()
11 call_user_func_array(array|2|, array|0|)
10 Neos\Flow\Cli\CommandController_Original::callCommandMethod()
9 Neos\Flow\Cli\CommandController_Original::processRequest(Neos\Flow\Cli\Request, Neos\Flow\Cli\Response)
8 Neos\Flow\Mvc\Dispatcher_Original::initiateDispatchLoop(Neos\Flow\Cli\Request, Neos\Flow\Cli\Response)
7 Neos\Flow\Mvc\Dispatcher_Original::dispatch(Neos\Flow\Cli\Request, Neos\Flow\Cli\Response)
6 Neos\Flow\Cli\CommandRequestHandler::Neos\Flow\Cli\{closure}()
5 Closure::__invoke()
4 Neos\Flow\Security\Context_Original::withoutAuthorizationChecks(Closure)
3 Neos\Flow\Cli\CommandRequestHandler::handleRequest()
2 Neos\Flow\Core\Bootstrap::run()
1 require("/opt/Quickstart/Packages/Framework/Neos.Flow/Scripts/flow.php")
```
