<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.dotask.co>.
 */
namespace Tinyrest;
use Tinyrest\Application\ApplicationInterface,
    Tinyrest\Application\Response,
    Tinyrest\Application\Request;


/**
 *  
 */
class Application implements ApplicationInterface{
    /**
     * @var Request
     */
    private $_request = null;

    /**
     * @var Response
     */
    private $_response = null;

    /**
     * @var EventListener
     */
    private $_eventListener = null;

    /**
     * @var Dispatcher
     */
    private $_dispatcher = null;

    /**
     * @param Request $request
     * @return void
     */
    public function setRequest(Request $request) {
        $this->_request = $request;
    }

    /**
     * @return  Request
     */
    public function getRequest() {
        return $this->_request;
    }

    /**
     * 
     */
    private function _initRequest(){
        if($this->_request instanceof Request) return;
        $request = new Request;
        $this->setRequest($request);
    }

    /**
     * @param Response $response
     * @return void
     */
    public function setResponse(Response $response) {
        $this->_response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse() {
        return $this->_response;
    }

    /**
     * 
     */
    private function _initResponse(){
        if($this->_response instanceof Response) return;
        $response = new Response;
        $this->setResponse($response);
    }
    /**
     * @param  Dispatcher $dispatcher
     * @return void
     */
    public function setDispatcher(Dispatcher $dispatcher) {
        $this->_dispatcher = $dispatcher;
    }

    /**
     * @return Dispatcher
     */
    public function getDispatcher() {
        return $this->_dispatcher;
    }

    /**
     * 
     */
    private function _initDispatcher(){
        if($this->_dispatcher instanceof Dispatcher) return;
        $dispatcher = new Dispatcher;
        $this->setDispatcher($dispatcher);
    }
    /**
     * @param EventListener $eventListener
     * @return void
     */
    public function setEventListener(EventListener $eventListener) {
        $this->_eventListener = $eventListener;
    }

    /**
     * @return EventListener
     */
    public function getEventListener() {
        return $this->_eventListener;
    }

    /**
     * 
     */
    private function _initEventListener(){
        if($this->_eventListener instanceof EventListener) return;
        $eventListener = new EventListener;
        $this->setEventListener($eventListener);
    }

    /**
     * @return void
     */
    public function run(){
        $this->_initEventListener();
        $this->_initRequest();
        $this->_initResponse();
        $this->_initDispatcher();
    }
}
