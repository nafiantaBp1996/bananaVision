<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Set Pisang</h4>
                  <p class="card-description">
                    Add class
                    <code>.table-bordered</code>
                  </p>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>First name</th>
                          <th>Progress</th>
                          <th>Amount</th>
                          <th>Deadline</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php for ($i=0; $i <10 ; $i++) {?>
                        <tr>
                          <td>1</td>
                          <td>Henry Tom</td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td>$ 150.00</td>
                          <td>June 16, 2015</td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>