# D.backward(retain_graph=True)
# disc_optimizer.step()
# disc_optimizer.zero_grad()



# G_Loss.backward()
# gen_optimizer.step()
# gen_optimizer.zero_grad()



total_L_G_AtoB.backward(retain_graph=True)
gen_A2B_optimizer.step()
gen_A2B_optimizer.zero_grad()

total_L_G_BtoA.backward(retain_graph=True)
gen_B2A_optimizer.step()
gen_B2A_optimizer.zero_grad()






